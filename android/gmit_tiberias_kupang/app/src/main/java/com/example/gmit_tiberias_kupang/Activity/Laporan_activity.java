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

public class Laporan_activity extends AppCompatActivity {

	private ListView listView;

	private String JSON_STRING;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_laporan);
		listView = (ListView) findViewById(R.id.listView);

//        listView.setOnItemClickListener(this);
		getJSON();
    }

	private void showLaporan() {
		JSONObject jsonObject = null;
		ArrayList<HashMap<String, String>> list = new ArrayList<HashMap<String, String>>();
		try {
			jsonObject = new JSONObject(JSON_STRING);
			JSONArray result = jsonObject.getJSONArray(konfigurasi.TAG_JSON_ARRAY_LAP);

			for (int i = 0; i < result.length(); i++) {
				JSONObject jo = result.getJSONObject(i);
//				String id_laporan = jo.getString(konfigurasi.TAG_ID_LAP);
				String jumlah = jo.getString(konfigurasi.TAG_JUMLAH_LAP);
				String tanggal = jo.getString(konfigurasi.TAG_TGL_LAP);



				HashMap<String, String> laporan = new HashMap<>();
//				laporan.put(konfigurasi.TAG_ID_LAP, id_laporan);
				laporan.put(konfigurasi.TAG_JUMLAH_LAP, jumlah);
				laporan.put(konfigurasi.TAG_TGL_LAP, tanggal);
				list.add(laporan);
			}

		} catch (JSONException e) {
			e.printStackTrace();
		}

		ListAdapter adapter = new SimpleAdapter(
				Laporan_activity.this, list, R.layout.item_laporan,
				new String[]{
						konfigurasi.TAG_JUMLAH_LAP,
						konfigurasi.TAG_TGL_LAP,
				},
				new int[]{
						R.id.jumlah,
						R.id.tanggal,
				});

		listView.setAdapter(adapter);

	}

	private void getJSON() {
		class GetJSON extends AsyncTask<Void, Void, String> {

			ProgressDialog loading;

			@Override
			protected void onPreExecute() {
				super.onPreExecute();
				loading = ProgressDialog.show(Laporan_activity.this, "Mengambil Data", "Mohon Tunggu...", false, false);
			}

			@Override
			protected void onPostExecute(String s) {
				super.onPostExecute(s);
				loading.dismiss();
				JSON_STRING = s;
				showLaporan();
			}

			@Override
			protected String doInBackground(Void... params) {
				RequestHandler rh = new RequestHandler();
				String s = rh.sendGetRequest(konfigurasi.URL_GET_LAPORAN);
				return s;
			}
		}
		GetJSON gj = new GetJSON();
		gj.execute();
	}

}
