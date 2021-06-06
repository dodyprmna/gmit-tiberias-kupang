package com.example.gmit_tiberias_kupang.Activity;

import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.app.AlertDialog;
import android.app.ProgressDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.example.gmit_tiberias_kupang.R;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;

public class Detail_baptisan_activity extends AppCompatActivity{

//	private TextView et_id;
	private TextView et_nama;
	private TextView et_tempat_lahir;
	private TextView et_tgl_lahir;
	private TextView et_alamat;
	private TextView et_nAyah;
	private TextView et_nIbu;
	private TextView et_tgl_bap;
	private TextView et_tempat_bap;
	private TextView et_oleh;


	private String id;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detail_baptisan);

		Intent intent = getIntent();

		id = intent.getStringExtra(konfigurasi.BAP_ID);

//		et_id = (TextView) findViewById(R.id.et_id);
		et_nama = (TextView) findViewById(R.id.et_nama);
		et_tempat_lahir = (TextView) findViewById(R.id.et_tempat_lahir);
		et_tgl_lahir = (TextView) findViewById(R.id.et_tgl_lahir);
		et_alamat = (TextView) findViewById(R.id.et_alamat);
		et_nAyah = (TextView) findViewById(R.id.et_nAyah);
		et_nIbu = (TextView) findViewById(R.id.et_nIbu);
		et_tgl_bap = (TextView) findViewById(R.id.et_tgl_bap);
		et_tempat_bap = (TextView) findViewById(R.id.et_tempat_bap);
		et_oleh = (TextView) findViewById(R.id.et_oleh);

		getBaptisan();
	}

	private void getBaptisan(){
		class GetBaptisan extends AsyncTask<Void,Void,String>{
			ProgressDialog loading;
			@Override
			protected void onPreExecute() {
				super.onPreExecute();
				loading = ProgressDialog.show(Detail_baptisan_activity.this,"Fetching...","Wait...",false,false);
			}

			@Override
			protected void onPostExecute(String s) {
				super.onPostExecute(s);
				loading.dismiss();
				showBaptisan(s);
			}

			@Override
			protected String doInBackground(Void... params) {
				RequestHandler rh = new RequestHandler();
				String s = rh.sendGetRequestParam(konfigurasi.URL_GET_DETAIL_BAPTISAN,"2");
				return s;
			}
		}
		GetBaptisan ge = new GetBaptisan();
		ge.execute();
	}

	private void showBaptisan(String json){
		try {
			JSONObject jsonObject = new JSONObject(json);
			JSONArray result = jsonObject.getJSONArray(konfigurasi.TAG_JSON_ARRAY_BAPTISAN);
			JSONObject c = result.getJSONObject(0);
			String nama = c.getString(konfigurasi.TAG_NAMA_BAPTISAN);
			String tempat_lahir = c.getString(konfigurasi.TAG_TEMPAT_LAHIR_BAPTISAN);
			String tanggal_lahir = c.getString(konfigurasi.TAG_TGL_LAHIR_BAPTISAN);
			String alamat = c.getString(konfigurasi.TAG_ALAMAT_BAPTISAN);
			String nama_ayah = c.getString(konfigurasi.TAG_NAMA_AYAH_BAPTISAN);
			String nama_ibu = c.getString(konfigurasi.TAG_NAMA_IBU_BAPTISAN);
			String tanggal_baptis = c.getString(konfigurasi.TAG_TGL_BAPTISAN);
			String tempat_baptis = c.getString(konfigurasi.TAG_TEMPAT_BAPTISAN);
			String oleh = c.getString(konfigurasi.TAG_OLEH_BAPTISAN);

			et_nama.setText(nama);
			et_tempat_lahir.setText(tempat_lahir);
			et_tgl_lahir.setText(tanggal_lahir);
			et_alamat.setText(alamat);
			et_nAyah.setText(nama_ayah);
			et_nIbu.setText(nama_ibu);
			et_tgl_bap.setText(tanggal_baptis);
			et_tempat_bap.setText(tempat_baptis);
			et_oleh.setText(oleh);



		} catch (JSONException e) {
			e.printStackTrace();
		}
	}


}
