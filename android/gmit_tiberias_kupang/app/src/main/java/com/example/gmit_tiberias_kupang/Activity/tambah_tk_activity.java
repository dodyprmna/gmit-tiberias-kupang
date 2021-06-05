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
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Toast;

import com.example.gmit_tiberias_kupang.R;

import java.util.Calendar;
import java.util.HashMap;

public class tambah_tk_activity extends AppCompatActivity implements View.OnClickListener{

	EditText tanggal_lahir;
	DatePickerDialog datePickerDialog;

	RadioGroup rg_jk;
	RadioButton rb_lk;
	RadioButton rb_pr;
	String jk;

//	private EditText editText_id_registrasi;
	private EditText editText_nama_lengkap;
	private EditText editText_nik;
	private EditText editText_alamat;
	private EditText editText_jenis_kelamin;
	private EditText editText_tempat_lahir;
	private EditText editText_tanggal_lahir;
	private EditText editText_agama;
//	private EditText editText_kewarganegaraan;
	private EditText editText_tinggal_bersama;
	private EditText editText_anak_ke;
	private EditText editText_usia;
	private EditText editText_telepon;

	private Button buttonAdd;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_tambah_tk);
		tanggal_lahir = (EditText) findViewById(R.id.tanggal_lahir);

//		editText_id_registrasi = (EditText) findViewById(R.id.id_registrasi);
		editText_nama_lengkap = (EditText) findViewById(R.id.nama_lengkap);
		editText_nik = (EditText) findViewById(R.id.nik);
		editText_alamat = (EditText) findViewById(R.id.alamat);
//		editText_jenis_kelamin = (EditText) findViewById(R.id.jenis_kelamin);
		rg_jk = (RadioGroup) findViewById(R.id.rg_jk);
		rb_lk = (RadioButton) findViewById(R.id.rb_lk);
		rb_pr = (RadioButton) findViewById(R.id.rb_pr);

		editText_tempat_lahir = (EditText) findViewById(R.id.tempat_lahir);
		editText_tanggal_lahir = (EditText) findViewById(R.id.tanggal_lahir);
		editText_agama = (EditText) findViewById(R.id.agama);
//		editText_kewarganegaraan = (EditText) findViewById(R.id.kewarganegaraan);
		editText_tinggal_bersama = (EditText) findViewById(R.id.tinggal_bersama);
		editText_anak_ke = (EditText) findViewById(R.id.anak_ke);
		editText_usia = (EditText) findViewById(R.id.usia);
		editText_telepon = (EditText) findViewById(R.id.telepon);

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
				datePickerDialog = new DatePickerDialog(tambah_tk_activity.this,
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

		rg_jk.setOnCheckedChangeListener(new RadioGroup.OnCheckedChangeListener() {
			@Override
			public void onCheckedChanged(RadioGroup group, int checkedId) {
				if (checkedId == R.id.rb_lk){
					jk = String.valueOf("1");
				}else if (checkedId == R.id.rb_pr){
					jk = String.valueOf("2");
				}
			}
		});

	}

	private void addTk(){


		final String nama_lengkap = editText_nama_lengkap.getText().toString().trim();
		final String nik = editText_nik.getText().toString().trim();
		final String alamat = editText_alamat.getText().toString().trim();
		final String jenis_kelamin = jk.toString();

//		final String rg_jk = rg_jk.toString();

		final String tempat_lahir = editText_tempat_lahir.getText().toString().trim();
		final String tanggal_lahir = editText_tanggal_lahir.getText().toString().trim();
		final String agama = editText_agama.getText().toString().trim();
//		final String kewarganegaraan = editText_kewarganegaraan.getText().toString().trim();
		final String tinggal_bersama = editText_tinggal_bersama.getText().toString().trim();
		final String anak_ke = editText_anak_ke.getText().toString().trim();
		final String usia = editText_usia.getText().toString().trim();
		final String telepon = editText_telepon.getText().toString().trim();

		class AddTk extends AsyncTask<Void,Void,String> {

			ProgressDialog loading;

			@Override
			protected void onPreExecute() {
				super.onPreExecute();
				loading = ProgressDialog.show(tambah_tk_activity.this,"Menambahkan...","Tunggu...",false,false);
			}

			@Override
			protected void onPostExecute(String s) {
				super.onPostExecute(s);
				loading.dismiss();
				Toast.makeText(tambah_tk_activity.this,s,Toast.LENGTH_LONG).show();
			}

			@Override
			protected String doInBackground(Void... v) {
				HashMap<String,String> params = new HashMap<>();
//				params.put(konfigurasi.KEY_TK_ID_REGISTRASI, id_registrasi);
				params.put(konfigurasi.KEY_TK_NAMA_LENGKAP, nama_lengkap);
				params.put(konfigurasi.KEY_TK_NIK, nik);
				params.put(konfigurasi.KEY_TK_ALAMAT, alamat);
				params.put(konfigurasi.KEY_TK_JENIS_KELAMIN, jenis_kelamin);
				params.put(konfigurasi.KEY_TK_TEMPAT_LAHIR, tempat_lahir);
				params.put(konfigurasi.KEY_TK_TANGGAL_LAHIR, tanggal_lahir);
				params.put(konfigurasi.KEY_TK_AGAMA, agama);
//				params.put(konfigurasi.KEY_TK_KEWARGANEGARAAN, kewarganegaraan);
				params.put(konfigurasi.KEY_TK_TINGGAL_BERSAMA, tinggal_bersama);
				params.put(konfigurasi.KEY_TK_ANAK_KE, anak_ke);
				params.put(konfigurasi.KEY_TK_USIA, usia);
				params.put(konfigurasi.KEY_TK_TELEPON, telepon);

				RequestHandler rh = new RequestHandler();
				String res = rh.sendPostRequest(konfigurasi.URL_ADD_TK, params);
				return res;
			}
		}

		AddTk ae = new AddTk();
		ae.execute();
	}

	@Override
	public void onClick(View v) {
		if(v == buttonAdd){
			addTk();
		}

	}


}
