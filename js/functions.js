

//Genera las previsualizaciones
function createPreview(file) {
    var imgCodified = URL.createObjectURL(file);
    var rand = getRandomString(5);
    var name = file.name;
    var img = $('<div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-xs-14"> <input type="hidden" name="photo-' + rand + '" value="' + name + '"> <div class="image-container"> <figure> <img src="' + imgCodified + '" alt="Foto del usuario"> <figcaption><span class="material-icons" style="font-size: 80px">close</span></figcaption> </figure> </div></div>');
    $(img).insertBefore("#add-photo-container");
}

//Crea un nuevo input file
function createInputFile() {
    var rand = getRandomString(5);
    return $('<input type="file" multiple id="add-new-photo" name="photo-file-' + rand + '[]">');
}
