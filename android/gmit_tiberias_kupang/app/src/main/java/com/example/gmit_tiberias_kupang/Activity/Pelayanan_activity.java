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

public class Pelayanan_activity extends AppCompatActivity {

	private ListView listView;

	private String JSON_STRING;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pelayanan);
		listView = (ListView) findViewById(R.id.listView);
//        listView.setOnItemClickListener(this);
		getJSON();
    }

	private void showPelayanan() {
		JSONObject jsonObject = null;
		ArrayList<HashMap<String, String>> list = new ArrayList<HashMap<String, String>>();
		try {
			jsonObject = new JSONObject(JSON_STRING);
			JSONArray result = jsonObject.getJSONArray(konfigurasi.TAG_JSON_ARRAY_PELAYANAN);

			for (int i = 0; i < result.length(); i++) {
				JSONObject jo = result.getJSONObject(i);
				String id_informasi_gereja = jo.getString(konfigurasi.TAG_ID_PELAYANAN);
				String pelayanan_gereja = jo.getString(konfigurasi.TAG_PELAYANAN);
				String kontak = jo.getString(konfigurasi.TAG_KONTAK_PELAYANAN);


				HashMap<String, String> pelayanan = new HashMap<>();
				pelayanan.put(konfigurasi.TAG_ID_PELAYANAN, id_informasi_gereja);
				pelayanan.put(konfigurasi.TAG_PELAYANAN, pelayanan_gereja);
				pelayanan.put(konfigurasi.TAG_KONTAK_PELAYANAN, kontak);
				list.add(pelayanan);
			}

		} catch (JSONException e) {
			e.printStackTrace();
		}

		ListAdapter adapter = new SimpleAdapter(
				Pelayanan_activity.this, list, R.layout.item_pelayanan,
				new String[]{konfigurasi.TAG_PELAYANAN, konfigurasi.TAG_KONTAK_PELAYANAN},
				new int[]{R.id.pelayanan_gereja, R.id.kontak});

		listView.setAdapter(adapter);

	}

	private void getJSON() {
		class GetJSON extends AsyncTask<Void, Void, String> {

			ProgressDialog loading;

			@Override
			protected void onPreExecute() {
				super.onPreExecute();
				loading = ProgressDialog.show(Pelayanan_activity.this, "Mengambil Data", "Mohon Tunggu...", false, false);
			}

			@Override
			protected void onPostExecute(String s) {
				super.onPostExecute(s);
				loading.dismiss();
				JSON_STRING = s;
				showPelayanan();
			}

			@Override
			protected String doInBackground(Void... params) {
				RequestHandler rh = new RequestHandler();
				String s = rh.sendGetRequest(konfigurasi.URL_GET_ALL_INFO);
				return s;
			}
		}
		GetJSON gj = new GetJSON();
		gj.execute();
	}

}
