package com.example.gmit_tiberias_kupang.Activity;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.annotation.SuppressLint;
import android.app.VoiceInteractor;
import android.os.Bundle;
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
import java.util.HashMap;


public class Jadwal_ibadah_activity extends AppCompatActivity {

    private ListView listView;

    private String JSON_STRING;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_jadwal_ibadah);
        listView = (ListView) findViewById(R.id.listView);
//        listView.setOnItemClickListener(this);
        getJSON();
    }


    private void showJadwal(){
        JSONObject jsonObject = null;
        ArrayList<HashMap<String,String>> list = new ArrayList<HashMap<String, String>>();
        try {
            jsonObject = new JSONObject(JSON_STRING);
            JSONArray result = jsonObject.getJSONArray(konfigurasi.TAG_JSON_ARRAY);

            for(int i = 0; i<result.length(); i++){
                JSONObject jo = result.getJSONObject(i);
                String id = jo.getString(konfigurasi.TAG_ID);
                String nama = jo.getString(konfigurasi.TAG_NAMA);
                String jenis = jo.getString(konfigurasi.TAG_JENIS);
                String tgl = jo.getString(konfigurasi.TAG_TGL);
                String j_mulai = jo.getString(konfigurasi.TAG_J_MULAI);
                String j_selesai = jo.getString(konfigurasi.TAG_J_SELESAI);


                HashMap<String,String> jadwal = new HashMap<>();
                jadwal.put(konfigurasi.TAG_ID,id);
                jadwal.put(konfigurasi.TAG_NAMA,nama);
                jadwal.put(konfigurasi.TAG_JENIS,jenis);
                jadwal.put(konfigurasi.TAG_TGL,tgl);
                jadwal.put(konfigurasi.TAG_J_MULAI,j_mulai);
                jadwal.put(konfigurasi.TAG_J_SELESAI,j_selesai);
                list.add(jadwal);
            }

        } catch (JSONException e) {
            e.printStackTrace();
        }

        ListAdapter adapter = new SimpleAdapter(
                Jadwal_ibadah_activity.this, list, R.layout.item_jadwal_ibadah,
                new String[]{konfigurasi.TAG_NAMA, konfigurasi.TAG_JENIS, konfigurasi.TAG_TGL, konfigurasi.TAG_J_MULAI, konfigurasi.TAG_J_SELESAI},
                new int[]{R.id.nama, R.id.jenis, R.id.tgl, R.id.j_mulai, R.id.j_selesai});

        listView.setAdapter(adapter);
    }

    private void getJSON(){
        class GetJSON extends AsyncTask<Void,Void,String>{

            ProgressDialog loading;
            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(Jadwal_ibadah_activity.this,"Mengambil Data","Mohon Tunggu...",false,false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                JSON_STRING = s;
                showJadwal();
            }

            @Override
            protected String doInBackground(Void... params) {
                RequestHandler rh = new RequestHandler();
                String s = rh.sendGetRequest(konfigurasi.URL_GET_ALL);
                return s;
            }
        }
        GetJSON gj = new GetJSON();
        gj.execute();
    }

//    @Override
//    public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
//        Intent intent = new Intent(this, TampilPegawai.class);
//        HashMap<String,String> map =(HashMap)parent.getItemAtPosition(position);
//        String empId = map.get(konfigurasi.TAG_ID).toString();
//        intent.putExtra(konfigurasi.EMP_ID,empId);
//        startActivity(intent);
//    }


}