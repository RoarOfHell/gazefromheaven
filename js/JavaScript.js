const login = document.getElementById("textlogin");
const password = document.getElementById("pasw");
const userSettings = document.getElementById("userSettingsDiv");
const userInfo = document.getElementById("profileInfoDiv");
const store = document.getElementById("store");
const inventory = document.getElementById("inventory");


function updateButton() {
  
  if(login.value != ""){

  }
  else{
    login.style.backgroundColor = '#FF0000';
    setTimeout(() => { login.style.backgroundColor = '#fff0';  }, 500);
  }
  if(password.value != ""){

  }
  else{
    password.style.backgroundColor = '#FF0000';
    setTimeout(() => { password.style.backgroundColor = '#fff0';  }, 500);
  }
  
}

function showAndHideSettings(){
  if(userSettings.style.visibility == "visible"){
    userSettings.style.visibility = "collapse";
  }
  else{
    userSettings.style.visibility = "visible";
  }
}

function hideAll(){
    if(userInfo){
      userInfo.style.visibility = "collapse";
  }
  if(userSettings){
      userSettings.style.visibility = "collapse";
  }
  if(inventory){
      inventory.style.visibility = "collapse";
  }
  if(store){
      store.style.visibility = "collapse";
  }
}

function openProfile(){
  if(userInfo){
      userInfo.style.visibility = "visible";
  }
  if(userSettings){
      userSettings.style.visibility = "collapse";
  }
  if(inventory){
      inventory.style.visibility = "collapse";
  }
  if(store){
      store.style.visibility = "collapse";
  }
}

function goToMain(){
  if(userInfo){
      userInfo.style.visibility = "collapse";
  }
  if(userSettings){
      userSettings.style.visibility = "collapse";
  }
  if(inventory){
      inventory.style.visibility = "collapse";
  }
  if(store){
      store.style.visibility = "collapse";
  }
}

function goToStore(){
  if(userInfo){
      userInfo.style.visibility = "collapse";
  }
  if(userSettings){
      userSettings.style.visibility = "collapse";
  }
  if(inventory){
      inventory.style.visibility = "collapse";
  }
  if(store){
      store.style.visibility = "visible";
  }
}

function openInventory() {
    if(userInfo){
      userInfo.style.visibility = "collapse";
  }
  if(userSettings){
      userSettings.style.visibility = "collapse";
  }
  if(inventory){
      inventory.style.visibility = "visible";
  }
  if(store){
      store.style.visibility = "collapse";
  }
}
