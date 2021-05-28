package com.example.gmit_tiberias_kupang.Activity;

import androidx.appcompat.app.AppCompatActivity;
import androidx.cardview.widget.CardView;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.LinearLayout;

import com.example.gmit_tiberias_kupang.R;

public class Home extends AppCompatActivity {

    LinearLayout l_jadwal, l_info, l_liturigi, l_warta, l_artikel, l_kontak, l_renungan, l_admin;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);
        l_jadwal=findViewById(R.id.l_jadwal);
        l_info=findViewById(R.id.l_info);
        l_liturigi=findViewById(R.id.l_liturigi);
        l_warta=findViewById(R.id.l_warta);
        l_artikel=findViewById(R.id.l_artikel);
        l_kontak=findViewById(R.id.l_kontak);
        l_renungan=findViewById(R.id.l_renungan);
        l_admin=findViewById(R.id.l_admin);

        l_jadwal.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), Jadwal_ibadah_activity.class));
            }
        });
        l_info.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), Informasi_activity.class));
            }
        });
        l_liturigi.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), Liturigi_activity.class));
            }
        });
        l_warta.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), Warta_activity.class));
            }
        });
        l_artikel.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), Artikel_activity.class));
            }
        });
        l_kontak.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), Kontak_activity.class));
            }
        });
        l_renungan.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), Renungan_activity.class));
            }
        });
        l_admin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), Administrasi_activity.class));
            }
        });

    }

}