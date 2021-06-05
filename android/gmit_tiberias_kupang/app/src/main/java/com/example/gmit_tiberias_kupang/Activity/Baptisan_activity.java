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

public class Baptisan_activity extends AppCompatActivity {

	private ListView listView;

	private String JSON_STRING;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_baptisan);
		listView = (ListView) findViewById(R.id.listView);
		CircleImageView addBaptis = (CircleImageView) findViewById(R.id.addBaptis);

//        listView.setOnItemClickListener(this);
		getJSON();

		addBaptis.setOnClickListener(new View.OnClickListener() {

			@Override
			public void onClick(View v) {
				// Start the Signup activity
				Intent intent = new Intent(Baptisan_activity.this, Tambah_baptisan_activity.class);
				startActivity(intent);
//                finish();
//                overridePendingTransition(R.anim.);
			}
		});
    }

	private void showBaptisan() {
		JSONObject jsonObject = null;
		ArrayList<HashMap<String, String>> list = new ArrayList<HashMap<String, String>>();
		try {
			jsonObject = new JSONObject(JSON_STRING);
			JSONArray result = jsonObject.getJSONArray(konfigurasi.TAG_JSON_ARRAY_BAPTISAN);

			for (int i = 0; i < result.length(); i++) {
				JSONObject jo = result.getJSONObject(i);
				String id_baptisan = jo.getString(konfigurasi.TAG_ID_BAPTISAN);
				String nama = jo.getString(konfigurasi.TAG_NAMA_BAPTISAN);
				String tempat_lahir = jo.getString(konfigurasi.TAG_TEMPAT_LAHIR_BAPTISAN);
				String tanggal_lahir = jo.getString(konfigurasi.TAG_TGL_LAHIR_BAPTISAN);
				String alamat = jo.getString(konfigurasi.TAG_ALAMAT_BAPTISAN);
				String nama_ayah = jo.getString(konfigurasi.TAG_NAMA_AYAH_BAPTISAN);
				String nama_ibu = jo.getString(konfigurasi.TAG_NAMA_IBU_BAPTISAN);
				String tanggal_baptis = jo.getString(konfigurasi.TAG_TGL_BAPTISAN);
				String tempat_baptis = jo.getString(konfigurasi.TAG_TEMPAT_BAPTISAN);
				String oleh = jo.getString(konfigurasi.TAG_OLEH_BAPTISAN);



				HashMap<String, String> baptisan = new HashMap<>();
				baptisan.put(konfigurasi.TAG_ID_BAPTISAN, id_baptisan);
				baptisan.put(konfigurasi.TAG_NAMA_BAPTISAN, nama);
				baptisan.put(konfigurasi.TAG_TEMPAT_LAHIR_BAPTISAN, tempat_lahir);
				baptisan.put(konfigurasi.TAG_TGL_LAHIR_BAPTISAN, tanggal_lahir);
				baptisan.put(konfigurasi.TAG_ALAMAT_BAPTISAN, alamat);
				baptisan.put(konfigurasi.TAG_NAMA_AYAH_BAPTISAN, nama_ayah);
				baptisan.put(konfigurasi.TAG_NAMA_IBU_BAPTISAN, nama_ibu);
				baptisan.put(konfigurasi.TAG_TGL_BAPTISAN, tanggal_baptis);
				baptisan.put(konfigurasi.TAG_TEMPAT_BAPTISAN, tempat_baptis);
				baptisan.put(konfigurasi.TAG_OLEH_BAPTISAN, oleh);

				list.add(baptisan);
			}

		} catch (JSONException e) {
			e.printStackTrace();
		}

		ListAdapter adapter = new SimpleAdapter(
				Baptisan_activity.this, list, R.layout.item_baptisan,
				new String[]{konfigurasi.TAG_NAMA_BAPTISAN
						, konfigurasi.TAG_TEMPAT_LAHIR_BAPTISAN
						, konfigurasi.TAG_TGL_LAHIR_BAPTISAN
						, konfigurasi.TAG_ALAMAT_BAPTISAN
						, konfigurasi.TAG_NAMA_AYAH_BAPTISAN
						, konfigurasi.TAG_NAMA_IBU_BAPTISAN
						, konfigurasi.TAG_TGL_BAPTISAN
						, konfigurasi.TAG_TEMPAT_BAPTISAN
						, konfigurasi.TAG_OLEH_BAPTISAN},
				new int[]{R.id.nama
						, R.id.tempat_lahir
						, R.id.tanggal_lahir
						, R.id.alamat
						, R.id.nama_ayah
						, R.id.nama_ibu
						, R.id.tanggal_baptis
						, R.id.tempat_baptis
						, R.id.oleh});

		listView.setAdapter(adapter);

	}

	private void getJSON() {
		class GetJSON extends AsyncTask<Void, Void, String> {

			ProgressDialog loading;

			@Override
			protected void onPreExecute() {
				super.onPreExecute();
				loading = ProgressDialog.show(Baptisan_activity.this, "Mengambil Data", "Mohon Tunggu...", false, false);
			}

			@Override
			protected void onPostExecute(String s) {
				super.onPostExecute(s);
				loading.dismiss();
				JSON_STRING = s;
				showBaptisan();
			}

			@Override
			protected String doInBackground(Void... params) {
				RequestHandler rh = new RequestHandler();
				String s = rh.sendGetRequest(konfigurasi.URL_GET_ALL_BAPTISAN);
				return s;
			}
		}
		GetJSON gj = new GetJSON();
		gj.execute();
	}



//	@Override
//	public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
//		Intent intent = new Intent(this, Detail_baptisan_activity.class);
//		HashMap<String,String> map =(HashMap)parent.getItemAtPosition(position);
//		String bapId = map.get(konfigurasi.TAG_ID_BAPTISAN).toString();
//		intent.putExtra(konfigurasi.BAP_ID,bapId);
//		startActivity(intent);
//	}

}
