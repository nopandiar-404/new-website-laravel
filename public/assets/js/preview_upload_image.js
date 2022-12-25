document.getElementById("file").addEventListener("change", (e) => {
    const file = e.target.files[0];
    // console.log(document.getElementById("previewPhoto").src);
    document.getElementById("previewPhoto").src = URL.createObjectURL(file);
});
document.getElementById("file2").addEventListener("change", (e) => {
    const file2 = e.target.files[0];
    // console.log(document.getElementById("previewPhoto").src);
    document.getElementById("previewPhoto2").src = URL.createObjectURL(file2);
});
document.getElementById("file3").addEventListener("change", (e) => {
    const file3 = e.target.files[0];
    // console.log(document.getElementById("previewPhoto").src);
    document.getElementById("previewPhoto3").src = URL.createObjectURL(file3);
});
