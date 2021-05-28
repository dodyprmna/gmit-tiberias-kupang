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
    private EditText editTextRayon;
    private EditText editTextUser;
    private EditText editTextPass;


    private Button buttonAdd;
//    private Button buttonView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);
        //Inisialisasi dari View
        editTextNama = (EditText) findViewById(R.id.t_nama);
        editTextRayon = (EditText) findViewById(R.id.t_rayon);
        editTextUser = (EditText) findViewById(R.id.t_user);
        editTextPass = (EditText) findViewById(R.id.t_pass);

        buttonAdd = (Button) findViewById(R.id.button_register);


        //Setting listeners to button
        buttonAdd.setOnClickListener(this);
    }

    //Dibawah ini merupakan perintah untuk Menambahkan Member (CREATE)
    private void addMember(){

        final String nama = editTextNama.getText().toString().trim();
        final String rayon = editTextRayon.getText().toString().trim();
        final String user = editTextUser.getText().toString().trim();
        final String pass = editTextPass.getText().toString().trim();

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
//                params.put(konfigurasi.KEY_ID_M,nama);
                params.put(konfigurasi.KEY_RAYON_M,rayon);
                params.put(konfigurasi.KEY_USER_M,user);
                params.put(konfigurasi.KEY_PASS_M,pass);
                params.put(konfigurasi.KEY_NAMA_M,nama);

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