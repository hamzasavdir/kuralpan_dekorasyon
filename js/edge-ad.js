function kpCloseEdgeAd(e){
  e.preventDefault();      
  e.stopPropagation();     

  const ad = document.getElementById("kpEdgeAd");
  if(ad){
    ad.classList.add("is-hidden"); 
  }
}
