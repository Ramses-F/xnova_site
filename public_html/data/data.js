
construitUnProjet()
function construitUnProjet() {
  const templateProjet =document.querySelector('#contenu')
  var data =document.querySelector('#data_essai').value
  var projets = JSON.parse(data);
  for (var i = 0; i < projets.length; i++) {

    templateProjet.innerHTML += `<section">
    <div class="container">
    <div class="row">
    <div class="span8">
    <article>
    <div class="top-wrapper">
    <div class="post-heading">
    <h3><a href="#">Ceci est une illustration  du Projet</a></h3>
    </div>
    <!-- start flexslider -->
    <div class="flexslider">
    <ul class="slides">
    <li>
    <img src="${ projets[i].images[0].nom_image}" alt="" />
    </li>
    <li>
    <img src="${projets[i].images && projets[i].images[1] ? projets[i].images[1].nom_image:'./uploads/default.jpg'}" alt="" />
    </li>
    <li>
    <img src="${projets[i].images && projets[i].images[2] ? projets[i].images[2].nom_image:'./uploads/default.jpg'}" alt="" />
    </li>
    </ul>
    </div>
    <!-- end flexslider -->
    </div>
    <p>
    ${ projets[i].legend}
    </p>
    </article>
    </div>
    <div class="span4">
    <aside class="right-sidebar">
    <div class="widget">
    <h5 class="widgetheading">Renseignements sur le projet</h5>
    <ul class="folio-detail">
    <li><label>Category :</label> ${ projets[i].categorie}</li>
    <li><label>Client :</label> ${ projets[i].client}</li>
    <li><label> Date projet :</label> ${ projets[i].date_projet}</li>
    <li><label> URL du projet:</label><a href="${ projets[i].url}">${ projets[i].url}</a></li>
    </ul>
    </div>
    <div class="widget">
    <h5 class="widgetheading">Description du projet</h5>
    <p>
    ${ projets[i].text}.
    </p>
    </div>
    </aside>
    </div>
    </div>
    </div>
    </section>`;

  }

}
