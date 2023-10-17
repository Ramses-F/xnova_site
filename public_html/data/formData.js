const limage =document.querySelector('#ajouterImage')
var cpt=0;
//var limage = document.querySelector('#nom_image')
function addImage(){
    
    
    document.querySelector('#complete').addEventListener("click",()=>{
        
        console.log("est-ce que ça passe!")
        if(cpt<2){
            cpt++
            limage.innerHTML+=` <tr><td><div class="col-md-6">
            <label class="form-control">Image</label>
            <input type="file"  name="nom_image${cpt}"  class="form-control ">
            </div><a  href="javascript:void(0);" onclick="removeRow('${cpt}');" ><span class="glyphicon glyphicon-remove" style="top:-25px;margin-left: 950px;"></span></a></td></tr>`
        }
    })
    
}
addOeuvreRecente()
function addOeuvreRecente(){
    const oeuvre =document.querySelector('#projects')
    var data =document.querySelector('#data_oeuvre').value
    var projets = JSON.parse(data);
    
    for (var i = 0; i < projets.length; i++) {
        oeuvre.innerHTML +=`<ul id="thumbs" class="portfolio">
        <!-- Item Project and Filter Name -->
        <li class="item-thumbs span3 design" data-id="id-${i}" data-type="web">
          <!-- Fancybox - Gallery Enabled - Title - Full Image -->
          <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="${ projets[i].client}" href="${ projets[i].images[0].nom_image}">
              <span class="overlay-img"></span>
              <span class="overlay-img-thumb font-icon-plus"></span>
              </a>
          <!-- Thumb Image and Description -->
          <img src="${ projets[i].images[0].nom_image}" alt="${ projets[i].legend}.">
        </li>
        <!-- End Item Project -->
      </ul>`

    }
}
