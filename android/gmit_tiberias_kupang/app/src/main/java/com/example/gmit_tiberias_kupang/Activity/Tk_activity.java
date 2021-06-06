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

public class Tk_activity extends AppCompatActivity {

	private ListView listView;

	private String JSON_STRING;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_tk);
		listView = (ListView) findViewById(R.id.listView);
		CircleImageView addTk = (CircleImageView) findViewById(R.id.addTk);

//        listView.setOnItemClickListener(this);
		getJSON();

		addTk.setOnClickListener(new View.OnClickListener() {

			@Override
			public void onClick(View v) {
				// Start the Signup activity
				Intent intent = new Intent(Tk_activity.this, tambah_tk_activity.class);
				startActivity(intent);
//                finish();
//                overridePendingTransition(R.anim.);
			}
		});
	}

	private void showTk() {
		JSONObject jsonObject = null;
		ArrayList<HashMap<String, String>> list = new ArrayList<HashMap<String, String>>();
		try {
			jsonObject = new JSONObject(JSON_STRING);
			JSONArray result = jsonObject.getJSONArray(konfigurasi.TAG_JSON_ARRAY_TK);

			for (int i = 0; i < result.length(); i++) {
				JSONObject jo = result.getJSONObject(i);
//				String id_registrasi = jo.getString(konfigurasi.TAG_TK_ID_REGISTRASI);
				String nama_lengkap = jo.getString(konfigurasi.TAG_TK_NAMA_LENGKAP);
				String nik = jo.getString(konfigurasi.TAG_TK_NIK);
				String alamat = jo.getString(konfigurasi.TAG_TK_ALAMAT);
				String jenis_kelamin = jo.getString(konfigurasi.TAG_TK_JENIS_KELAMIN);
				String tempat_lahir = jo.getString(konfigurasi.TAG_TK_TEMPAT_LAHIR);
				String tanggal_lahir = jo.getString(konfigurasi.TAG_TK_TANGGAL_LAHIR);
				String agama = jo.getString(konfigurasi.TAG_TK_AGAMA);
				String kewarganegaraan = jo.getString(konfigurasi.TAG_TK_KEWARGANEGARAAN);
				String tinggal_bersama = jo.getString(konfigurasi.TAG_TK_TINGGAL_BERSAMA);
				String anak_ke = jo.getString(konfigurasi.TAG_TK_ANAK_KE);
				String usia = jo.getString(konfigurasi.TAG_TK_USIA);
				String telepon = jo.getString(konfigurasi.TAG_TK_TELEPON);



				HashMap<String, String> tk = new HashMap<>();
//				tk.put(konfigurasi.TAG_TK_ID_REGISTRASI, id_registrasi);
				tk.put(konfigurasi.TAG_TK_NAMA_LENGKAP, nama_lengkap);
				tk.put(konfigurasi.TAG_TK_NIK, nik);
				tk.put(konfigurasi.TAG_TK_ALAMAT, alamat);
				tk.put(konfigurasi.TAG_TK_JENIS_KELAMIN, jenis_kelamin);
				tk.put(konfigurasi.TAG_TK_TEMPAT_LAHIR, tempat_lahir);
				tk.put(konfigurasi.TAG_TK_TANGGAL_LAHIR, tanggal_lahir);
				tk.put(konfigurasi.TAG_TK_AGAMA, agama);
				tk.put(konfigurasi.TAG_TK_KEWARGANEGARAAN, kewarganegaraan);
				tk.put(konfigurasi.TAG_TK_TINGGAL_BERSAMA, tinggal_bersama);
				tk.put(konfigurasi.TAG_TK_ANAK_KE, anak_ke);
				tk.put(konfigurasi.TAG_TK_USIA, usia);
				tk.put(konfigurasi.TAG_TK_TELEPON, telepon);

				list.add(tk);
			}

		} catch (JSONException e) {
			e.printStackTrace();
		}

		ListAdapter adapter = new SimpleAdapter(
				Tk_activity.this, list, R.layout.item_tk,
				new String[]{
						konfigurasi.TAG_TK_NAMA_LENGKAP,
						konfigurasi.TAG_TK_NIK,
						konfigurasi.TAG_TK_ALAMAT,
						konfigurasi.TAG_TK_JENIS_KELAMIN,
						konfigurasi.TAG_TK_TEMPAT_LAHIR,
						konfigurasi.TAG_TK_TANGGAL_LAHIR,
						konfigurasi.TAG_TK_AGAMA,
						konfigurasi.TAG_TK_KEWARGANEGARAAN,
						konfigurasi.TAG_TK_TINGGAL_BERSAMA,
						konfigurasi.TAG_TK_ANAK_KE,
						konfigurasi.TAG_TK_USIA,
						konfigurasi.TAG_TK_TELEPON
				},
				new int[]{
						R.id.nama_lengkap,
						R.id.nik,
						R.id.alamat,
						R.id.jenis_kelamin,
						R.id.tempat_lahir,
						R.id.tanggal_lahir,
						R.id.agama,
						R.id.kewarganegaraan,
						R.id.tinggal_bersama,
						R.id.anak_ke,
						R.id.usia,
						R.id.telepon
				});

		listView.setAdapter(adapter);

	}

	private void getJSON() {
		class GetJSON extends AsyncTask<Void, Void, String> {

			ProgressDialog loading;

			@Override
			protected void onPreExecute() {
				super.onPreExecute();
				loading = ProgressDialog.show(Tk_activity.this, "Mengambil Data", "Mohon Tunggu...", false, false);
			}

			@Override
			protected void onPostExecute(String s) {
				super.onPostExecute(s);
				loading.dismiss();
				JSON_STRING = s;
				showTk();
			}

			@Override
			protected String doInBackground(Void... params) {
				RequestHandler rh = new RequestHandler();
				String s = rh.sendGetRequest(konfigurasi.URL_GET_ALL_TK);
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
