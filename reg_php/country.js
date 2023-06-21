var data = {
    country: [
        {
            Field10: "USA",
            states: ["California", "Texas", "Florida"],
        },
        {
            Field10: "Canada",
            states: ["Alberta", "BritishColumbia", "Manitoba"],
        }, {
            Field10: "Germany",
            states: ["Bavaria", "NorthRhine"],
        }, {
            Field10: "India",
            states: ["Maharashtra", "TamilNadu", "Karnataka", "Arunachal Pradesh", "Andhra Pradesh", "Delhi ","Gujarat"],
        },

    ],
};

window.onload = function () {
    const selectcountry = document.getElementById("Field10");
    const selectstate = document.getElementById("states");
    selectstate.disabled = true;

    //Add country Value to country Select option
    data.country.forEach((value) => {
        selectcountry.appendChild(createOption(value.Field10, value.Field10));
    });

    selectcountry.addEventListener("change", function (e) {
        selectstate.disabled = false;
        data.country.forEach((detail, index) => {
            // console.log(data.country[index].states);
            if (detail.Field10 == e.target.value) {
                selectstate.innerHTML = "";
                selectstate.append(createOption("Select District", ""));
                data.country[index].states.forEach((states) => {
                    selectstate.append(createOption(states, states));
                });
            }
        });
    });

    //Create New Option Tag With Value
    function createOption(displayMember, valueMember) {
        const newOption = document.createElement("option");
        newOption.value = valueMember;
        newOption.text = displayMember;
        return newOption;
    }
};