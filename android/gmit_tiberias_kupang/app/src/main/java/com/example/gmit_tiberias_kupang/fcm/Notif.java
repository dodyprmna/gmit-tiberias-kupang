package com.example.gmit_tiberias_kupang.fcm;

import android.util.Log;


import com.google.firebase.messaging.FirebaseMessagingService;
import com.google.firebase.messaging.RemoteMessage;

import java.util.Map;


public class Notif extends FirebaseMessagingService {

	@Override
	public void onMessageReceived(RemoteMessage remoteMessage) {
		Map<String, String> data = remoteMessage.getData();
		if(data != null) {
			// Do something with Token
		}
	}

	// FirebaseInstanceId.getInstance().getToken();
	@Override
	public void onNewToken(String token) {
		super.onNewToken(token);
		if (!token.isEmpty()) {
			Log.e("NEW_TOKEN",token);
		}
	}


}
