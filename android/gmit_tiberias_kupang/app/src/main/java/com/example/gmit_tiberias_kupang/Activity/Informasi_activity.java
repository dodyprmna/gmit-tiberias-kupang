package com.example.gmit_tiberias_kupang.Activity;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.annotation.SuppressLint;
import android.app.VoiceInteractor;
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

public class Informasi_activity extends AppCompatActivity {

    private ListView listView;

    private String JSON_STRING;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_informasi);
        listView = (ListView) findViewById(R.id.listView);
//        listView.setOnItemClickListener(this);
        getJSON();
    }

    private void showPengumuman() {
        JSONObject jsonObject = null;
        ArrayList<HashMap<String, String>> list = new ArrayList<HashMap<String, String>>();
        try {
            jsonObject = new JSONObject(JSON_STRING);
            JSONArray result = jsonObject.getJSONArray(konfigurasi.TAG_JSON_ARRAY_P);

            for (int i = 0; i < result.length(); i++) {
                JSONObject jo = result.getJSONObject(i);
                String id_p = jo.getString(konfigurasi.TAG_ID_P);
                String judul_p = jo.getString(konfigurasi.TAG_JUDUL_P);
                String isi_p = jo.getString(konfigurasi.TAG_ISI_P);


                HashMap<String, String> pengumuman = new HashMap<>();
                pengumuman.put(konfigurasi.TAG_ID_P, id_p);
                pengumuman.put(konfigurasi.TAG_JUDUL_P, judul_p);
                pengumuman.put(konfigurasi.TAG_ISI_P, isi_p);
                list.add(pengumuman);
            }

        } catch (JSONException e) {
            e.printStackTrace();
        }

        ListAdapter adapter = new SimpleAdapter(
                Informasi_activity.this, list, R.layout.item_pengumuman,
                new String[]{konfigurasi.TAG_JUDUL_P, konfigurasi.TAG_ISI_P},
                new int[]{R.id.judul, R.id.isi});

        listView.setAdapter(adapter);

    }

    private void getJSON() {
        class GetJSON extends AsyncTask<Void, Void, String> {

            ProgressDialog loading;

            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(Informasi_activity.this, "Mengambil Data", "Mohon Tunggu...", false, false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                JSON_STRING = s;
                showPengumuman();
            }

            @Override
            protected String doInBackground(Void... params) {
                RequestHandler rh = new RequestHandler();
                String s = rh.sendGetRequest(konfigurasi.URL_GET_ALL_PENGUMUMAN);
                return s;
            }
        }
        GetJSON gj = new GetJSON();
        gj.execute();
    }

}