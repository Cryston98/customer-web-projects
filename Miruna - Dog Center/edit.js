function editAnunt(id) {
  document.getElementById('formEditAnunt').style.display="block";
  document.getElementById('idAnunt').value=id;

}
function selectOptionEdit(id){
  if (id==1) {
    document.getElementById('fildToUpdate').placeholder="Enter New OwnerName";
    document.getElementById('fildToUpdateHidd').value="OName";
  }else if (id==2) {
    document.getElementById('fildToUpdate').placeholder="Enter New IDowner";
    document.getElementById('fildToUpdateHidd').value="IDowner";
  }else if (id==3) {
    document.getElementById('fildToUpdate').placeholder="Enter New Age";
    document.getElementById('fildToUpdateHidd').value="Age";
  }else if (id==4) {
    document.getElementById('fildToUpdate').placeholder="Enter New Phone";
    document.getElementById('fildToUpdateHidd').value="Phone";
  }else if (id==5) {
    document.getElementById('fildToUpdate').placeholder="Enter New Info";
    document.getElementById('fildToUpdateHidd').value="info";
  }
}

function closePopUpEdit(){
  document.getElementById('formEditAnunt').style.display="none";
}
