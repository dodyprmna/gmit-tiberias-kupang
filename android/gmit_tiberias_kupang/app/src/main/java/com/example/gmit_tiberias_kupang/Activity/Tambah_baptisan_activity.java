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

public class Tambah_baptisan_activity extends AppCompatActivity implements View.OnClickListener{

	EditText tanggal_lahir;
	EditText tanggal_baptis;
	DatePickerDialog datePickerDialog;

	private EditText editTextNama;
	private EditText editTextTempatLahir;
	private EditText editTexttglLahir;
	private EditText editTextAlamat;
	private EditText editTextNamaAyah;
	private EditText editTextNamaIbu;
	private EditText editTextTglBaptis;
	private EditText editTextTempatBaptis;
	private EditText editTextOleh;


	private Button buttonAdd;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_tambah_baptisan);
		tanggal_lahir = (EditText) findViewById(R.id.tanggal_lahir);
		tanggal_baptis = (EditText) findViewById(R.id.tanggal_baptis);

		editTextNama = (EditText) findViewById(R.id.nama);
		editTextTempatLahir = (EditText) findViewById(R.id.tempat_lahir);
		editTexttglLahir = (EditText) findViewById(R.id.tanggal_lahir);
		editTextAlamat = (EditText) findViewById(R.id.alamat);
		editTextNamaAyah = (EditText) findViewById(R.id.nama_ayah);
		editTextNamaIbu = (EditText) findViewById(R.id.nama_ibu);
		editTextTglBaptis = (EditText) findViewById(R.id.tanggal_baptis);
		editTextTempatBaptis = (EditText) findViewById(R.id.tempat_baptis);
		editTextOleh = (EditText) findViewById(R.id.oleh);

		buttonAdd = (Button) findViewById(R.id.button_add);


		//Setting listeners to button
		buttonAdd.setOnClickListener(this);

		tanggal_lahir.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {
				// calender class's instance and get current date , month and year from calender
				final Calendar c = Calendar.getInstance();
				int mYear = c.get(Calendar.YEAR); // current year
				int mMonth = c.get(Calendar.MONTH); // current month
				int mDay = c.get(Calendar.DAY_OF_MONTH); // current day
				// date picker dialog
				datePickerDialog = new DatePickerDialog(Tambah_baptisan_activity.this,
						new DatePickerDialog.OnDateSetListener() {

							@Override
							public void onDateSet(DatePicker view, int year, int monthOfYear, int dayOfMonth) {
								// set day of month , month and year value in the edit text
								tanggal_lahir.setText(year + "-" + (monthOfYear + 1) + "-" + dayOfMonth);

							}
						}, mYear, mMonth, mDay);
				datePickerDialog.show();
			}
		});

		tanggal_baptis.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {
				// calender class's instance and get current date , month and year from calender
				final Calendar c = Calendar.getInstance();
				int mYear = c.get(Calendar.YEAR); // current year
				int mMonth = c.get(Calendar.MONTH); // current month
				int mDay = c.get(Calendar.DAY_OF_MONTH); // current day
				// date picker dialog
				datePickerDialog = new DatePickerDialog(Tambah_baptisan_activity.this,
						new DatePickerDialog.OnDateSetListener() {

							@Override
							public void onDateSet(DatePicker view, int year, int monthOfYear, int dayOfMonth) {
								// set day of month , month and year value in the edit text
								tanggal_baptis.setText(year + "-" + (monthOfYear + 1) + "-" + dayOfMonth);

							}
						}, mYear, mMonth, mDay);
				datePickerDialog.show();
			}
		});

	}

	private void addBaptisan(){

		final String nama = editTextNama.getText().toString().trim();
		final String tempat_lahir = editTextTempatLahir.getText().toString().trim();
		final String tanggal_lahir = editTexttglLahir.getText().toString().trim();
		final String alamat = editTextAlamat.getText().toString().trim();
		final String nama_ayah = editTextNamaAyah.getText().toString().trim();
		final String nama_ibu = editTextNamaIbu.getText().toString().trim();
		final String tanggal_baptis = editTextTglBaptis.getText().toString().trim();
		final String tempat_baptis = editTextTempatBaptis.getText().toString().trim();
		final String oleh = editTextOleh.getText().toString().trim();

		class AddBaptisan extends AsyncTask<Void,Void,String> {

			ProgressDialog loading;

			@Override
			protected void onPreExecute() {
				super.onPreExecute();
				loading = ProgressDialog.show(Tambah_baptisan_activity.this,"Menambahkan...","Tunggu...",false,false);
			}

			@Override
			protected void onPostExecute(String s) {
				super.onPostExecute(s);
				loading.dismiss();
				Toast.makeText(Tambah_baptisan_activity.this,s,Toast.LENGTH_LONG).show();
			}

			@Override
			protected String doInBackground(Void... v) {
				HashMap<String,String> params = new HashMap<>();
				params.put(konfigurasi.KEY_NAMA_BAPTISAN,nama);
				params.put(konfigurasi.KEY_TEMPAT_LAHIR_BAPTISAN,tempat_lahir);
				params.put(konfigurasi.KEY_TGL_LAHIR_BAPTISAN,tanggal_lahir);
				params.put(konfigurasi.KEY_ALAMAT_BAPTISAN,alamat);
				params.put(konfigurasi.KEY_NAMA_AYAH_BAPTISAN,nama_ayah);
				params.put(konfigurasi.KEY_NAMA_IBU_BAPTISAN,nama_ibu);
				params.put(konfigurasi.KEY_TGL_BAPTISAN,tanggal_baptis);
				params.put(konfigurasi.KEY_TEMPAT_BAPTISAN,tempat_baptis);
				params.put(konfigurasi.KEY_OLEH_BAPTISAN,oleh);

				RequestHandler rh = new RequestHandler();
				String res = rh.sendPostRequest(konfigurasi.URL_ADD_BAPTISAN, params);
				return res;
			}
		}

		AddBaptisan ae = new AddBaptisan();
		ae.execute();
	}

	@Override
	public void onClick(View v) {
		if(v == buttonAdd){
			addBaptisan();
		}

	}

}
