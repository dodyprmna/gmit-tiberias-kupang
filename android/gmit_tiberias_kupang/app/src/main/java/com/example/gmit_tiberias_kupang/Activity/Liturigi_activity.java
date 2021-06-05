package com.example.gmit_tiberias_kupang.Activity;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.annotation.SuppressLint;
import android.app.VoiceInteractor;
import android.net.Uri;
import android.os.Bundle;
import android.widget.Toolbar;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonArrayRequest;
import com.android.volley.toolbox.Volley;
import com.example.gmit_tiberias_kupang.R;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;

import androidx.appcompat.app.AppCompatActivity;
import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListAdapter;
import android.widget.ListView;
import android.widget.SimpleAdapter;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;

import com.example.gmit_tiberias_kupang.R;

public class Liturigi_activity extends AppCompatActivity {

    private ListView listView;

    private String JSON_STRING;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_liturigi);
        listView = (ListView) findViewById(R.id.listView);
//        listView.setOnItemClickListener(this);
        getJSON();
    }

    private void showLiturgi() {
        JSONObject jsonObject = null;
        ArrayList<HashMap<String, String>> list = new ArrayList<HashMap<String, String>>();
        try {
            jsonObject = new JSONObject(JSON_STRING);
            JSONArray result = jsonObject.getJSONArray(konfigurasi.TAG_JSON_ARRAY_L);

            for (int i = 0; i < result.length(); i++) {
                JSONObject jo = result.getJSONObject(i);
                String id_l = jo.getString(konfigurasi.TAG_ID_L);
                String file_l = jo.getString(konfigurasi.TAG_FILE_L);
                String nama_j = jo.getString(konfigurasi.TAG_NAMA_J);


                HashMap<String, String> liturgi = new HashMap<>();
                liturgi.put(konfigurasi.TAG_ID_L, id_l);
                liturgi.put(konfigurasi.TAG_FILE_L, file_l);
                liturgi.put(konfigurasi.TAG_NAMA_J, nama_j);
                list.add(liturgi);
            }

        } catch (JSONException e) {
            e.printStackTrace();
        }

        ListAdapter adapter = new SimpleAdapter(
                Liturigi_activity.this, list, R.layout.item_liturgi,
                new String[]{konfigurasi.TAG_FILE_L, konfigurasi.TAG_NAMA_J},
                new int[]{R.id.file, R.id.nama_j});

        listView.setAdapter(adapter);

    }

    private void getJSON() {
        class GetJSON extends AsyncTask<Void, Void, String> {

            ProgressDialog loading;

            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(Liturigi_activity.this, "Mengambil Data", "Mohon Tunggu...", false, false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                JSON_STRING = s;
                showLiturgi();
            }

            @Override
            protected String doInBackground(Void... params) {
                RequestHandler rh = new RequestHandler();
                String s = rh.sendGetRequest(konfigurasi.URL_GET_ALL_LITURGI);
                return s;
            }
        }
        GetJSON gj = new GetJSON();
        gj.execute();
    }

    public void download_file(View view){

    	Intent browserIntent = new Intent(Intent.ACTION_VIEW, Uri.parse("http://192.168.0.20/gmit-tiberias-kupang/uploads/liturgi/doc1123.pdf"));
    	startActivity(browserIntent);
	}

}
