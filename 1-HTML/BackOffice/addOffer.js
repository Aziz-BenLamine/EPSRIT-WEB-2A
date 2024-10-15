document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector("#travelOfferForm");
  const title = document.querySelector("#title");
  const destination = document.querySelector("#destination");

  form.addEventListener("submit", (event) => {
    event.preventDefault();
    validerFormulaire();
  });

  title.addEventListener("keyup", () => {
    validateTitle();
  });

  destination.addEventListener("keyup", () => {
    validateDestination();
  });
});

//Display correct / error message
const displayMessage = (element, message, isError = true) => {
  let messageElement = element.nextElementSibling;
  if (!messageElement || !messageElement.classList.contains("message")) {
    messageElement = document.createElement("div");
    messageElement.classList.add("message");
    element.parentNode.insertBefore(messageElement, element.nextSibling);
  }
  messageElement.textContent = message;
  messageElement.style.color = isError ? "red" : "green";
};

//Validation functions
const validateTitle = () => {
  const title = document.querySelector("#title");
  if (title.value.length < 3) {
    displayMessage(title, "The title must contain at least 3 characters");
  } else {
    displayMessage(title, "Correct", false);
  }
};

const validateDestination = () => {
  const destination = document.querySelector("#destination");
  const destinationRegex = /^[A-Za-z\s]{3,}$/;
  if (!destinationRegex.test(destination.value)) {
    displayMessage(
      destination,
      "The destination must contain only letters and spaces, and at least 3 characters"
    );
  } else {
    displayMessage(destination, "Correct", false);
  }
};

const validerFormulaire = () => {
  const title = document.querySelector("#title");
  const destination = document.querySelector("#destination");
  const departure = document.querySelector("#Departure");
  const returnDate = document.querySelector("#Return");
  const price = document.querySelector("#price");

  let isValid = true;
  //TITLE CHECK
  if (title.value.length < 3) {
    displayMessage(title, "The title must contain at least 3 characters");
    isValid = false;
  } else {
    displayMessage(title, "Title is valid", false);
  }

  //DESTINATION CHECK
  const destinationRegex = /^[A-Za-z\s]{3,}$/;
  if (!destinationRegex.test(destination.value)) {
    displayMessage(
      destination,
      "The destination must contain only letters and spaces, and at least 3 characters"
    );
    isValid = false;
  } else {
    displayMessage(destination, "Destination is valid", false);
  }

  const departureDateObj = new Date(departure.value);
  const returnDateObj = new Date(returnDate.value);

  //DEPARTURE DATE CHECK
  if (isNaN(departureDateObj) || isNaN(returnDateObj)) {
    displayMessage(
      departure,
      "Please enter valid dates for departure and return"
    );
    displayMessage(
      returnDate,
      "Please enter valid dates for departure and return"
    );
    isValid = false;
  } else if (departureDateObj >= returnDateObj) {
    displayMessage(departure, "Departure date must be before the return date");
    displayMessage(returnDate, "Return date must be after the departure date");
    isValid = false;
  } else {
    displayMessage(departure, "Departure date is valid", false);
    displayMessage(returnDate, "Return date is valid", false);
  }

  //PRICE CHECK
  if (isNaN(price.value) || price.value <= 0) {
    displayMessage(price, "The price must be a positive number");
    isValid = false;
  } else {
    displayMessage(price, "Price is valid", false);
  }

  if (isValid) {
    alert("Form is valid and ready to be submitted!");
  }
};
