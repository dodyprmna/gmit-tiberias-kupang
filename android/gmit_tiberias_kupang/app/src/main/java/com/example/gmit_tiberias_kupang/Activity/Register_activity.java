package com.example.gmit_tiberias_kupang.Activity;

import androidx.appcompat.app.AppCompatActivity;
import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import java.util.HashMap;

import com.example.gmit_tiberias_kupang.R;

public class Register_activity extends AppCompatActivity implements View.OnClickListener{

    //Dibawah ini merupakan perintah untuk mendefinikan View
	private EditText editTextNama;
	private EditText editTextNik;
	private EditText editTextGereja;
	private EditText editTextEmail;
    private EditText editTextPass;
    private EditText editTextRayon;
    private EditText editTextAlamat;


    private Button buttonAdd;
//    private Button buttonView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);
        //Inisialisasi dari View
		editTextNama = (EditText) findViewById(R.id.nama_jemaat);
		editTextNik = (EditText) findViewById(R.id.nik_jemaat);
		editTextGereja = (EditText) findViewById(R.id.gereja_sblm);
		editTextEmail = (EditText) findViewById(R.id.email_jemaat);
		editTextPass = (EditText) findViewById(R.id.pass_jemaat);
		editTextRayon = (EditText) findViewById(R.id.rayon_jemaat);
		editTextAlamat = (EditText) findViewById(R.id.alamat_jemaat);

        buttonAdd = (Button) findViewById(R.id.button_register);


        //Setting listeners to button
        buttonAdd.setOnClickListener(this);
    }

    //Dibawah ini merupakan perintah untuk Menambahkan Member (CREATE)
    private void addMember(){

		final String nama_jemaat = editTextNama.getText().toString().trim();
		final String nik_jemaat = editTextNik.getText().toString().trim();
		final String gereja_sblm = editTextGereja.getText().toString().trim();
		final String email_jemaat = editTextEmail.getText().toString().trim();
        final String pass_jemaat = editTextPass.getText().toString().trim();
        final String rayon_jemaat = editTextRayon.getText().toString().trim();
        final String alamat_jemaat = editTextAlamat.getText().toString().trim();

        class AddMember extends AsyncTask<Void,Void,String>{

            ProgressDialog loading;

            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(Register_activity.this,"Menambahkan...","Tunggu...",false,false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                Toast.makeText(Register_activity.this,s,Toast.LENGTH_LONG).show();
            }

            @Override
            protected String doInBackground(Void... v) {
                HashMap<String,String> params = new HashMap<>();
                params.put(konfigurasi.KEY_NAMA_JEMAAT,nama_jemaat);
				params.put(konfigurasi.KEY_NIK_JEMAAT,nik_jemaat);
				params.put(konfigurasi.KEY_GEREJA_JEMAAT,gereja_sblm);
				params.put(konfigurasi.KEY_EMAIL_JEMAAT,email_jemaat);
				params.put(konfigurasi.KEY_PASS_JEMAAT,pass_jemaat);
                params.put(konfigurasi.KEY_RAYON_JEMAAT,rayon_jemaat);
                params.put(konfigurasi.KEY_ALAMAT_JEMAAT,alamat_jemaat);

                RequestHandler rh = new RequestHandler();
                String res = rh.sendPostRequest(konfigurasi.URL_ADD, params);
                return res;
            }
        }

        AddMember ae = new AddMember();
        ae.execute();
    }

    @Override
    public void onClick(View v) {
        if(v == buttonAdd){
            addMember();
        }

    }

}
