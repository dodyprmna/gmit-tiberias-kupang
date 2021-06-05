package com.example.gmit_tiberias_kupang.Activity;

import androidx.appcompat.app.AppCompatActivity;

import android.app.DatePickerDialog;
import android.app.ProgressDialog;
import android.os.AsyncTask;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.Toast;

import com.example.gmit_tiberias_kupang.R;

import java.util.Calendar;
import java.util.HashMap;

public class Tambah_pernikahan_activity extends AppCompatActivity implements View.OnClickListener {

	DatePickerDialog datePickerDialog;

	private EditText editText_id_perkawinan;
	private EditText editText_nama_calon_istri;
	private EditText editText_tempat_lahir_calon_istri;
	EditText editText_tanggal_lahir_calon_istri;
	private EditText editText_alamat_calon_istri;
	private EditText editText_telepon_calon_istri;
	private EditText editText_agama_calon_istri;
	private EditText editText_gereja_calon_istri;
	private EditText editText_nama_calon_suami;
	private EditText editText_tempat_lahir_calon_suami;
	EditText editText_tanggal_lahir_calon_suami;
	private EditText editText_alamat_calon_suami;
	private EditText editText_telepon_calon_suami;
	private EditText editText_agama_calon_suami;
	private EditText editText_gereja_calon_suami;
	EditText editText_tanggal_pemberkatan;
	private EditText editText_nama_ayah_calon_suami;
	private EditText editText_nama_ayah_calon_istri;
	private EditText editText_agama_ayah_calon_suami;
	private EditText editText_agama_ayah_calon_istri;
	private EditText editText_pekerjaan_ayah_calon_suami;
	private EditText editText_pekerjaan_ayah_calon_istri;
	private EditText editText_alamat_ayah_calon_suami;
	private EditText editText_alamat_ayah_calon_istri;
	private EditText editText_nama_ibu_calon_suami;
	private EditText editText_nama_ibu_calon_istri;
	private EditText editText_agama_ibu_calon_suami;
	private EditText editText_agama_ibu_calon_istri;
	private EditText editText_pekerjaan_ibu_calon_suami;
	private EditText editText_pekerjaan_ibu_calon_istri;
	private EditText editText_alamat_ibu_calon_suami;
	private EditText editText_alamat_ibu_calon_istri;
	private EditText editText_gereja;

	private Button buttonAdd;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_tambah_pernikahan);

//		editText_id_perkawinan = (EditText) findViewById(R.id.id_perkawinan);
		editText_nama_calon_istri = (EditText) findViewById(R.id.nama_calon_istri);
		editText_tempat_lahir_calon_istri = (EditText) findViewById(R.id.tempat_lahir_calon_istri);
		editText_tanggal_lahir_calon_istri = (EditText) findViewById(R.id.tanggal_lahir_calon_istri);
		editText_alamat_calon_istri = (EditText) findViewById(R.id.alamat_calon_istri);
		editText_telepon_calon_istri = (EditText) findViewById(R.id.telepon_calon_istri);
		editText_agama_calon_istri = (EditText) findViewById(R.id.agama_calon_istri);
		editText_gereja_calon_istri = (EditText) findViewById(R.id.gereja_calon_istri);
		editText_nama_calon_suami = (EditText) findViewById(R.id.nama_calon_suami);
		editText_tempat_lahir_calon_suami = (EditText) findViewById(R.id.tempat_lahir_calon_suami);
		editText_tanggal_lahir_calon_suami = (EditText) findViewById(R.id.tanggal_lahir_calon_suami);
		editText_alamat_calon_suami = (EditText) findViewById(R.id.alamat_calon_suami);
		editText_telepon_calon_suami = (EditText) findViewById(R.id.telepon_calon_suami);
		editText_agama_calon_suami = (EditText) findViewById(R.id.agama_calon_suami);
		editText_gereja_calon_suami = (EditText) findViewById(R.id.gereja_calon_suami);
		editText_tanggal_pemberkatan = (EditText) findViewById(R.id.tanggal_pemberkatan);
		editText_nama_ayah_calon_suami = (EditText) findViewById(R.id.nama_ayah_calon_suami);
		editText_nama_ayah_calon_istri = (EditText) findViewById(R.id.nama_ayah_calon_istri);
		editText_agama_ayah_calon_suami = (EditText) findViewById(R.id.agama_ayah_calon_suami);
		editText_agama_ayah_calon_istri = (EditText) findViewById(R.id.agama_ayah_calon_istri);
		editText_pekerjaan_ayah_calon_suami = (EditText) findViewById(R.id.pekerjaan_ayah_calon_suami);
		editText_pekerjaan_ayah_calon_istri = (EditText) findViewById(R.id.pekerjaan_ayah_calon_istri);
		editText_alamat_ayah_calon_suami = (EditText) findViewById(R.id.alamat_ayah_calon_suami);
		editText_alamat_ayah_calon_istri = (EditText) findViewById(R.id.alamat_ayah_calon_istri);
		editText_nama_ibu_calon_suami = (EditText) findViewById(R.id.nama_ibu_calon_suami);
		editText_nama_ibu_calon_istri = (EditText) findViewById(R.id.nama_ibu_calon_istri);
		editText_agama_ibu_calon_suami = (EditText) findViewById(R.id.agama_ibu_calon_suami);
		editText_agama_ibu_calon_istri = (EditText) findViewById(R.id.agama_ibu_calon_istri);
		editText_pekerjaan_ibu_calon_suami = (EditText) findViewById(R.id.pekerjaan_ibu_calon_suami);
		editText_pekerjaan_ibu_calon_istri = (EditText) findViewById(R.id.pekerjaan_ibu_calon_istri);
		editText_alamat_ibu_calon_suami = (EditText) findViewById(R.id.alamat_ibu_calon_suami);
		editText_alamat_ibu_calon_istri = (EditText) findViewById(R.id.alamat_ibu_calon_istri);
		editText_gereja = (EditText) findViewById(R.id.gereja);

		buttonAdd = (Button) findViewById(R.id.button_add);
		buttonAdd.setOnClickListener(this);

		editText_tanggal_lahir_calon_istri.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {
				// calender class's instance and get current date , month and year from calender
				final Calendar c = Calendar.getInstance();
				int mYear = c.get(Calendar.YEAR); // current year
				int mMonth = c.get(Calendar.MONTH); // current month
				int mDay = c.get(Calendar.DAY_OF_MONTH); // current day
				// date picker dialog
				datePickerDialog = new DatePickerDialog(Tambah_pernikahan_activity.this,
						new DatePickerDialog.OnDateSetListener() {

							@Override
							public void onDateSet(DatePicker view, int year, int monthOfYear, int dayOfMonth) {
								// set day of month , month and year value in the edit text
								editText_tanggal_lahir_calon_istri.setText(year + "-" + (monthOfYear + 1) + "-" + dayOfMonth);

							}
						}, mYear, mMonth, mDay);
				datePickerDialog.show();
			}
		});

		editText_tanggal_lahir_calon_suami.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {
				// calender class's instance and get current date , month and year from calender
				final Calendar c = Calendar.getInstance();
				int mYear = c.get(Calendar.YEAR); // current year
				int mMonth = c.get(Calendar.MONTH); // current month
				int mDay = c.get(Calendar.DAY_OF_MONTH); // current day
				// date picker dialog
				datePickerDialog = new DatePickerDialog(Tambah_pernikahan_activity.this,
						new DatePickerDialog.OnDateSetListener() {

							@Override
							public void onDateSet(DatePicker view, int year, int monthOfYear, int dayOfMonth) {
								// set day of month , month and year value in the edit text
								editText_tanggal_lahir_calon_suami.setText(year + "-" + (monthOfYear + 1) + "-" + dayOfMonth);

							}
						}, mYear, mMonth, mDay);
				datePickerDialog.show();
			}
		});

		editText_tanggal_pemberkatan.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {
				// calender class's instance and get current date , month and year from calender
				final Calendar c = Calendar.getInstance();
				int mYear = c.get(Calendar.YEAR); // current year
				int mMonth = c.get(Calendar.MONTH); // current month
				int mDay = c.get(Calendar.DAY_OF_MONTH); // current day
				// date picker dialog
				datePickerDialog = new DatePickerDialog(Tambah_pernikahan_activity.this,
						new DatePickerDialog.OnDateSetListener() {

							@Override
							public void onDateSet(DatePicker view, int year, int monthOfYear, int dayOfMonth) {
								// set day of month , month and year value in the edit text
								editText_tanggal_pemberkatan.setText(year + "-" + (monthOfYear + 1) + "-" + dayOfMonth);

							}
						}, mYear, mMonth, mDay);
				datePickerDialog.show();
			}
		});

	}

	private void addPerkawinan(){

//		final String id_perkawinan = editText_id_perkawinan.getText().toString().trim();
		final String nama_calon_istri = editText_nama_calon_istri.getText().toString().trim();
		final String tempat_lahir_calon_istri = editText_tempat_lahir_calon_istri.getText().toString().trim();
		final String tanggal_lahir_calon_istri = editText_tanggal_lahir_calon_istri.getText().toString().trim();
		final String alamat_calon_istri = editText_alamat_calon_istri.getText().toString().trim();
		final String telepon_calon_istri = editText_telepon_calon_istri.getText().toString().trim();
		final String agama_calon_istri = editText_agama_calon_istri.getText().toString().trim();
		final String gereja_calon_istri = editText_gereja_calon_istri.getText().toString().trim();
		final String nama_calon_suami = editText_nama_calon_suami.getText().toString().trim();
		final String tempat_lahir_calon_suami = editText_tempat_lahir_calon_suami.getText().toString().trim();
		final String tanggal_lahir_calon_suami = editText_tanggal_lahir_calon_suami.getText().toString().trim();
		final String alamat_calon_suami = editText_alamat_calon_suami.getText().toString().trim();
		final String telepon_calon_suami = editText_telepon_calon_suami.getText().toString().trim();
		final String agama_calon_suami = editText_agama_calon_suami.getText().toString().trim();
		final String gereja_calon_suami = editText_gereja_calon_suami.getText().toString().trim();
		final String tanggal_pemberkatan = editText_tanggal_pemberkatan.getText().toString().trim();
		final String nama_ayah_calon_suami = editText_nama_ayah_calon_suami.getText().toString().trim();
		final String nama_ayah_calon_istri = editText_nama_ayah_calon_istri.getText().toString().trim();
		final String agama_ayah_calon_suami = editText_agama_ayah_calon_suami.getText().toString().trim();
		final String agama_ayah_calon_istri = editText_agama_ayah_calon_istri.getText().toString().trim();
		final String pekerjaan_ayah_calon_suami = editText_pekerjaan_ayah_calon_suami.getText().toString().trim();
		final String pekerjaan_ayah_calon_istri = editText_pekerjaan_ayah_calon_istri.getText().toString().trim();
		final String alamat_ayah_calon_suami = editText_alamat_ayah_calon_suami.getText().toString().trim();
		final String alamat_ayah_calon_istri = editText_alamat_ayah_calon_istri.getText().toString().trim();
		final String nama_ibu_calon_suami = editText_nama_ibu_calon_suami.getText().toString().trim();
		final String nama_ibu_calon_istri = editText_nama_ibu_calon_istri.getText().toString().trim();
		final String agama_ibu_calon_suami = editText_agama_ibu_calon_suami.getText().toString().trim();
		final String agama_ibu_calon_istri = editText_agama_ibu_calon_istri.getText().toString().trim();
		final String pekerjaan_ibu_calon_suami = editText_pekerjaan_ibu_calon_suami.getText().toString().trim();
		final String pekerjaan_ibu_calon_istri = editText_pekerjaan_ibu_calon_istri.getText().toString().trim();
		final String alamat_ibu_calon_suami = editText_alamat_ibu_calon_suami.getText().toString().trim();
		final String alamat_ibu_calon_istri = editText_alamat_ibu_calon_istri.getText().toString().trim();
		final String gereja = editText_gereja.getText().toString().trim();

		class AddPerkawinan extends AsyncTask<Void,Void,String> {

			ProgressDialog loading;

			@Override
			protected void onPreExecute() {
				super.onPreExecute();
				loading = ProgressDialog.show(Tambah_pernikahan_activity.this,"Menambahkan...","Tunggu...",false,false);
			}

			@Override
			protected void onPostExecute(String s) {
				super.onPostExecute(s);
				loading.dismiss();
				Toast.makeText(Tambah_pernikahan_activity.this,s,Toast.LENGTH_LONG).show();
			}

			@Override
			protected String doInBackground(Void... v) {
				HashMap<String,String> params = new HashMap<>();
//				params.put(konfigurasi.KEY_PERKAWINAN_ID_PERKAWINAN,id_perkawinan);
				params.put(konfigurasi.KEY_PERKAWINAN_NAMA_CALON_ISTRI,nama_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_TEMPAT_LAHIR_CALON_ISTRI,tempat_lahir_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_TANGGAL_LAHIR_CALON_ISTRI,tanggal_lahir_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_ALAMAT_CALON_ISTRI,alamat_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_TELEPON_CALON_ISTRI,telepon_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_AGAMA_CALON_ISTRI,agama_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_GEREJA_CALON_ISTRI,gereja_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_NAMA_CALON_SUAMI,nama_calon_suami);
				params.put(konfigurasi.KEY_PERKAWINAN_TEMPAT_LAHIR_CALON_SUAMI,tempat_lahir_calon_suami);
				params.put(konfigurasi.KEY_PERKAWINAN_TANGGAL_LAHIR_CALON_SUAMI,tanggal_lahir_calon_suami);
				params.put(konfigurasi.KEY_PERKAWINAN_ALAMAT_CALON_SUAMI,alamat_calon_suami);
				params.put(konfigurasi.KEY_PERKAWINAN_TELEPON_CALON_SUAMI,telepon_calon_suami);
				params.put(konfigurasi.KEY_PERKAWINAN_AGAMA_CALON_SUAMI,agama_calon_suami);
				params.put(konfigurasi.KEY_PERKAWINAN_GEREJA_CALON_SUAMI,gereja_calon_suami);
				params.put(konfigurasi.TAG_PERKAWINAN_TANGGAL_PEMBERKATAN,tanggal_pemberkatan);
				params.put(konfigurasi.KEY_PERKAWINAN_NAMA_AYAH_CALON_SUAMI,nama_ayah_calon_suami);
				params.put(konfigurasi.KEY_PERKAWINAN_NAMA_AYAH_CALON_ISTRI,nama_ayah_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_AGAMA_AYAH_CALON_SUAMI,agama_ayah_calon_suami);
				params.put(konfigurasi.KEY_PERKAWINAN_AGAMA_AYAH_CALON_ISTRI,agama_ayah_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_PEKERJAAN_AYAH_CALON_SUAMI,pekerjaan_ayah_calon_suami);
				params.put(konfigurasi.KEY_PERKAWINAN_PEKERJAAN_AYAH_CALON_ISTRI,pekerjaan_ayah_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_ALAMAT_AYAH_CALON_SUAMI,alamat_ayah_calon_suami);
				params.put(konfigurasi.KEY_PERKAWINAN_ALAMAT_AYAH_CALON_ISTRI,alamat_ayah_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_NAMA_IBU_CALON_SUAMI,nama_ibu_calon_suami);
				params.put(konfigurasi.KEY_PERKAWINAN_NAMA_IBU_CALON_ISTRI,nama_ibu_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_AGAMA_IBU_CALON_SUAMI,agama_ibu_calon_suami);
				params.put(konfigurasi.KEY_PERKAWINAN_AGAMA_IBU_CALON_ISTRI,agama_ibu_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_PEKERJAAN_IBU_CALON_SUAMI,pekerjaan_ibu_calon_suami);
				params.put(konfigurasi.KEY_PERKAWINAN_PEKERJAAN_IBU_CALON_ISTRI,pekerjaan_ibu_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_ALAMAT_IBU_CALON_SUAMI,alamat_ibu_calon_suami);
				params.put(konfigurasi.KEY_PERKAWINAN_ALAMAT_IBU_CALON_ISTRI,alamat_ibu_calon_istri);
				params.put(konfigurasi.KEY_PERKAWINAN_GEREJA,gereja);

				RequestHandler rh = new RequestHandler();
				String res = rh.sendPostRequest(konfigurasi.URL_ADD_PERKAWINAN, params);
				return res;
			}
		}

		AddPerkawinan ae = new AddPerkawinan();
		ae.execute();
	}

	@Override
	public void onClick(View v) {
		if(v == buttonAdd){
			addPerkawinan();
		}

	}


}
