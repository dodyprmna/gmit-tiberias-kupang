package com.example.gmit_tiberias_kupang.Activity;

import androidx.appcompat.app.AppCompatActivity;
import androidx.cardview.widget.CardView;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.LinearLayout;

import com.example.gmit_tiberias_kupang.R;

public class Administrasi_activity extends AppCompatActivity {

    LinearLayout l_baptis, l_pernikahan, l_jemaat, l_tk;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_administrasi);
        l_baptis=findViewById(R.id.l_baptis);
        l_pernikahan=findViewById(R.id.l_pernikahan);
        l_jemaat=findViewById(R.id.l_jemaat);
        l_tk=findViewById(R.id.l_tk);

        l_baptis.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), Baptisan_activity.class));
            }
        });
        l_pernikahan.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), Pernikahan_activity.class));
            }
        });
        l_jemaat.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), Jemaat_activity.class));
            }
        });
        l_tk.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), Tk_activity.class));
            }
        });

    }

}