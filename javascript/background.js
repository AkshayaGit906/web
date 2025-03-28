// Array of random background colors
const colors = ["#FF5733", "#33FF57", "#5733FF", "#FFC300", "#FF33A6", "#33FFF5", "#B833FF", "#FF8C33", "#33D4FF", "#FF3366"];

// Get the button element
const button = document.getElementById("changeColorBtn");

// Add click event to the button
button.addEventListener("click", changeBackgroundColor);

// Function to change background color
function changeBackgroundColor() {
    // Generate a random index to select a color
    const randomIndex = Math.floor(Math.random() * colors.length);

    // Change the body's background color
    document.body.style.backgroundColor = colors[randomIndex];
}