// Change content when mouse is over the area
function changeContent() {
    // Change the image source
    document.getElementById("image").src = "download.ipg";

    // Change the text
    document.getElementById("text").innerText = "You hovered over the content! 🎉";
}

// Reset content when mouse leaves the area
function resetContent() {
    // Reset the image to the original
    document.getElementById("image").src = "travel.jpeg";

    // Reset the text to the original
    document.getElementById("text").innerText = "I LOVE TRAVEL...";
}
