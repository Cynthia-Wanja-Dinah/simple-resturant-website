function submitForm() {
    // You can add client-side validation if needed

    // Submit the form
    document.getElementById("loginForm").submit();
}

 // Sample list of countries (you can get a more comprehensive list from a data source)
 const countries = [
    "Afghanistan", "Albania", "Algeria", /* ... add more countries ... */
];

// Reference to the select element
const select = document.getElementById("countries");

// Populate the dropdown with countries
countries.forEach(country => {
    const option = document.createElement("option");
    option.value = country.toLowerCase();  // Use lowercase for consistency
    option.text = country;
    select.add(option);
});
