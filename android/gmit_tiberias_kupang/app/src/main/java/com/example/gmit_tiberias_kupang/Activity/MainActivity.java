package com.example.gmit_tiberias_kupang.Activity;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.app.ProgressDialog;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.net.ConnectivityManager;
import android.os.Bundle;
import android.text.TextUtils;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.DefaultRetryPolicy;
import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.example.gmit_tiberias_kupang.R;
import com.example.gmit_tiberias_kupang.login.AppController;
import com.example.gmit_tiberias_kupang.login.Server;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;

public class MainActivity extends AppCompatActivity {

	EditText edit_email, edit_password;
	Button button_login;

//	CheckBox checkedStatus;
//	SharedPreferences sharedPreferences;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

		TextView signupLink = (TextView) findViewById(R.id.signupLink);
		edit_email = findViewById(R.id.edit_email);
		edit_password = findViewById(R.id.edit_password);
//		sharedPreferences = getSharedPreferences("UserInfo", Context.MODE_PRIVATE);
//		String loginStatus = sharedPreferences.getString(getResources().getString(R.string.prefStatus),"");
//		if (loginStatus.equals("loggedin")){
//			startActivity(new Intent(MainActivity.this,Home.class));
//			finish();
//		}

		button_login = findViewById(R.id.button_login);
		button_login.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {
				String email = edit_email.getText().toString();
				String password = edit_password.getText().toString();
				if (TextUtils.isEmpty(email) || TextUtils.isEmpty(password)){
					Toast.makeText(MainActivity.this, "All Fields Required", Toast.LENGTH_SHORT).show();
				}
				else{
					login(email,password);
				}
			}
		});


        signupLink.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {
                // Start the Signup activity
                Intent intent = new Intent(MainActivity.this, Register_activity.class);
                startActivity(intent);
//                finish();
//                overridePendingTransition(R.anim.);
            }
        });

    }



	private void login(final String email, final String password){
		final ProgressDialog progressDialog = new ProgressDialog(MainActivity.this);
		progressDialog.setTitle("Registering your account");
		progressDialog.setCancelable(false);
		progressDialog.setCanceledOnTouchOutside(false);
		progressDialog.setIndeterminate(false);
		progressDialog.show();
		String uRl = "http://192.168.0.20/gmit-tiberias-kupang/gmit/login.php";
		StringRequest request = new StringRequest(Request.Method.POST, uRl, new Response.Listener<String>() {
			@Override
			public void onResponse(String response) {


				if (response.equals("Login Success")){
					Toast.makeText(MainActivity.this, response, Toast.LENGTH_SHORT).show();
//					SharedPreferences.Editor editor = sharedPreferences.edit();
//					if (checkedStatus.isChecked()){
//						editor.putString(getResources().getString(R.string.prefStatus),"loggedin");
//					}
//					else{
//						editor.putString(getResources().getString(R.string.prefStatus),"loggedout");
//					}
//					editor.apply();
					startActivity(new Intent(MainActivity.this, Home.class));
					progressDialog.dismiss();
					finish();
				}
				else {
					Toast.makeText(MainActivity.this, response, Toast.LENGTH_SHORT).show();
					progressDialog.dismiss();
				}
			}
		}, new Response.ErrorListener() {
			@Override
			public void onErrorResponse(VolleyError error) {
				Toast.makeText(MainActivity.this, error.toString(), Toast.LENGTH_SHORT).show();
				progressDialog.dismiss();
			}
		}){
			@Override
			protected Map<String, String> getParams() throws AuthFailureError {
				HashMap<String,String> param = new HashMap<>();
				param.put("email",email);
				param.put("password",password);
				return param;

			}
		};

		request.setRetryPolicy(new DefaultRetryPolicy(30000,DefaultRetryPolicy.DEFAULT_MAX_RETRIES,DefaultRetryPolicy.DEFAULT_BACKOFF_MULT));
		MySingleton.getmInstance(MainActivity.this).addToRequestQueue(request);
	}


}
