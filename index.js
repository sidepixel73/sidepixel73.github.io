function langTextChange(language) {
    let langText = document.getElementById("langText");
    if (language == 'english') {
        langText.innerHTML = "Choose Language";
    } else if (language == 'russian') {
        langText.innerHTML = "Выберите язык"
    }
}
