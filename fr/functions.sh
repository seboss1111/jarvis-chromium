jv_plugin_affichage_ouvrir_url (){
	killall  chromium-browser >& /dev/null >1 /dev/null
	chromium-browser '-kiosk' "$1" & 
    site=`echo "$1"`
}


jv_plugin_affichage_fermer_naviguateur (){
	killall chromium-browser
}


jv_plugin_affichage_message(){
	killall  chromium-browser >& /dev/null >1 /dev/null
	chromium-browser '-kiosk' "localhost/jarvis-chromium-message.php?message=$1" & 
    echo "Affichage du message $1"
}
