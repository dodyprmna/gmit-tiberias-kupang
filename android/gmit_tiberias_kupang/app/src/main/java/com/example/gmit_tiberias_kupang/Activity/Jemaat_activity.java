package com.example.gmit_tiberias_kupang.Activity;

import androidx.appcompat.app.AppCompatActivity;

import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.annotation.SuppressLint;
import android.app.DatePickerDialog;
import android.app.VoiceInteractor;
import android.os.Bundle;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.TextView;
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
import java.util.Calendar;
import java.util.HashMap;

import com.example.gmit_tiberias_kupang.R;

public class Jemaat_activity extends AppCompatActivity {

	private ListView listView;

	private String JSON_STRING;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_jemaat);
		listView = (ListView) findViewById(R.id.listView);
//        listView.setOnItemClickListener(this);
		getJSON();
    }

	private void showJemaat() {
		JSONObject jsonObject = null;
		ArrayList<HashMap<String, String>> list = new ArrayList<HashMap<String, String>>();
		try {
			jsonObject = new JSONObject(JSON_STRING);
			JSONArray result = jsonObject.getJSONArray(konfigurasi.TAG_JSON_ARRAY_ALL_JEMAAT);

			for (int i = 0; i < result.length(); i++) {
				JSONObject jo = result.getJSONObject(i);
				String id_jemaat = jo.getString(konfigurasi.TAG_ALL_ID_JEMAAT);
				String nama = jo.getString(konfigurasi.TAG_ALL_NAMA_JEMAAT);
				String nik = jo.getString(konfigurasi.TAG_ALL_NIK_JEMAAT);
				String gereja_sebelumnya = jo.getString(konfigurasi.TAG_ALL_GEREJA_JEMAAT);
				String email = jo.getString(konfigurasi.TAG_ALL_EMAIL_JEMAAT);
				String rayon = jo.getString(konfigurasi.TAG_ALL_RAYON);
				String alamat = jo.getString(konfigurasi.TAG_ALL_ALAMAT_JEMAAT);
				String status = jo.getString(konfigurasi.TAG_ALL_STATUS_JEMAAT);



				HashMap<String, String> jemaat = new HashMap<>();
				jemaat.put(konfigurasi.TAG_ALL_ID_JEMAAT, id_jemaat);
				jemaat.put(konfigurasi.TAG_ALL_NAMA_JEMAAT, nama);
				jemaat.put(konfigurasi.TAG_ALL_NIK_JEMAAT, nik);
				jemaat.put(konfigurasi.TAG_ALL_GEREJA_JEMAAT, gereja_sebelumnya);
				jemaat.put(konfigurasi.TAG_ALL_EMAIL_JEMAAT, email);
				jemaat.put(konfigurasi.TAG_ALL_RAYON, rayon);
				jemaat.put(konfigurasi.TAG_ALL_ALAMAT_JEMAAT, alamat);
				jemaat.put(konfigurasi.TAG_ALL_STATUS_JEMAAT, status);

				list.add(jemaat);
			}

		} catch (JSONException e) {
			e.printStackTrace();
		}

		ListAdapter adapter = new SimpleAdapter(
				Jemaat_activity.this, list, R.layout.item_jemaat,
				new String[]{konfigurasi.TAG_ALL_NAMA_JEMAAT,
						konfigurasi.TAG_ALL_NIK_JEMAAT,
						konfigurasi.TAG_ALL_GEREJA_JEMAAT,
						konfigurasi.TAG_ALL_EMAIL_JEMAAT,
						konfigurasi.TAG_ALL_RAYON,
						konfigurasi.TAG_ALL_ALAMAT_JEMAAT,
						konfigurasi.TAG_ALL_STATUS_JEMAAT},
				new int[]{R.id.nama, R.id.nik, R.id.gereja_sebelumnya,
						R.id.email, R.id.rayon, R.id.alamat, R.id.status, });

		listView.setAdapter(adapter);

	}

	private void getJSON() {
		class GetJSON extends AsyncTask<Void, Void, String> {

			ProgressDialog loading;

			@Override
			protected void onPreExecute() {
				super.onPreExecute();
				loading = ProgressDialog.show(Jemaat_activity.this, "Mengambil Data", "Mohon Tunggu...", false, false);
			}

			@Override
			protected void onPostExecute(String s) {
				super.onPostExecute(s);
				loading.dismiss();
				JSON_STRING = s;
				showJemaat();
			}

			@Override
			protected String doInBackground(Void... params) {
				RequestHandler rh = new RequestHandler();
				String s = rh.sendGetRequest(konfigurasi.URL_GET_ALL_JEMAAT);
				return s;
			}
		}
		GetJSON gj = new GetJSON();
		gj.execute();
	}

}
