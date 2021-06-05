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

import de.hdodenhof.circleimageview.CircleImageView;

public class Pernikahan_activity extends AppCompatActivity {

	private ListView listView;

	private String JSON_STRING;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pernikahan);
		listView = (ListView) findViewById(R.id.listView);
		CircleImageView addPernikahan = (CircleImageView) findViewById(R.id.addPernikahan);

		getJSON();

		addPernikahan.setOnClickListener(new View.OnClickListener() {

			@Override
			public void onClick(View v) {
				// Start the Signup activity
				Intent intent = new Intent(Pernikahan_activity.this, Tambah_pernikahan_activity.class);
				startActivity(intent);
//                finish();
//                overridePendingTransition(R.anim.);
			}
		});

    }

	private void showPernikahan() {
		JSONObject jsonObject = null;
		ArrayList<HashMap<String, String>> list = new ArrayList<HashMap<String, String>>();
		try {
			jsonObject = new JSONObject(JSON_STRING);
			JSONArray result = jsonObject.getJSONArray(konfigurasi.TAG_JSON_ARRAY_ALL_JEMAAT);

			for (int i = 0; i < result.length(); i++) {
				JSONObject jo = result.getJSONObject(i);
				String id_perkawinan = jo.getString(konfigurasi.TAG_PERKAWINAN_ID_PERKAWINAN);
				String nama_calon_suami = jo.getString(konfigurasi.TAG_PERKAWINAN_NAMA_CALON_SUAMI);
				String nama_calon_istri = jo.getString(konfigurasi.TAG_PERKAWINAN_NAMA_CALON_ISTRI);
				String tanggal_pemberkatan = jo.getString(konfigurasi.TAG_PERKAWINAN_TANGGAL_PEMBERKATAN);
				String gereja = jo.getString(konfigurasi.TAG_PERKAWINAN_GEREJA);


				HashMap<String, String> perkawinan = new HashMap<>();
				perkawinan.put(konfigurasi.TAG_PERKAWINAN_ID_PERKAWINAN, id_perkawinan);
				perkawinan.put(konfigurasi.TAG_PERKAWINAN_NAMA_CALON_SUAMI, nama_calon_suami);
				perkawinan.put(konfigurasi.TAG_PERKAWINAN_NAMA_CALON_ISTRI, nama_calon_istri);
				perkawinan.put(konfigurasi.TAG_PERKAWINAN_TANGGAL_PEMBERKATAN, tanggal_pemberkatan);
				perkawinan.put(konfigurasi.TAG_PERKAWINAN_GEREJA, gereja);

				list.add(perkawinan);
			}

		} catch (JSONException e) {
			e.printStackTrace();
		}

		ListAdapter adapter = new SimpleAdapter(
				Pernikahan_activity.this, list, R.layout.item_pernikahan,
				new String[]{konfigurasi.TAG_PERKAWINAN_NAMA_CALON_SUAMI,
						konfigurasi.TAG_PERKAWINAN_NAMA_CALON_ISTRI,
						konfigurasi.TAG_PERKAWINAN_TANGGAL_PEMBERKATAN,
						konfigurasi.TAG_PERKAWINAN_GEREJA},
				new int[]{R.id.nama_calon_suami, R.id.nama_calon_istri, R.id.tanggal_pemberkatan,
						R.id.gereja});

		listView.setAdapter(adapter);

	}

	private void getJSON() {
		class GetJSON extends AsyncTask<Void, Void, String> {

			ProgressDialog loading;

			@Override
			protected void onPreExecute() {
				super.onPreExecute();
				loading = ProgressDialog.show(Pernikahan_activity.this, "Mengambil Data", "Mohon Tunggu...", false, false);
			}

			@Override
			protected void onPostExecute(String s) {
				super.onPostExecute(s);
				loading.dismiss();
				JSON_STRING = s;
				showPernikahan();
			}

			@Override
			protected String doInBackground(Void... params) {
				RequestHandler rh = new RequestHandler();
				String s = rh.sendGetRequest(konfigurasi.URL_GET_ALL_PERKAWINAN);
				return s;
			}
		}
		GetJSON gj = new GetJSON();
		gj.execute();
	}


}
