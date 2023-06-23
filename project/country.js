var data = {
    country_state: [
        {
            country: "USA",
            state: ["California", "Texas", "Florida"],
        },
        {
            country: "Canada",
            state: ["Alberta", "BritishColumbia", "Manitoba"],
        }, {
            country: "Germany",
            state: ["Bavaria", "NorthRhine"],
        }, {
            country: "India",
            state: ["Maharashtra", "TamilNadu", "Karnataka", "Arunachal Pradesh", "Andhra Pradesh", "Delhi ","Gujarat"],
        },

    ],
};

window.onload = function () {
    const selectcountry = document.getElementById("country");
    const selectstate = document.getElementById("state");
    selectstate.disabled = true;

    //Add country Value to country Select option
    data.country_state.forEach((value) => {
        selectcountry.appendChild(createOption(value.country, value.country));
    });

    selectcountry.addEventListener("change", function (e) {
        selectstate.disabled = false;
        data.country_state.forEach((detail, index) => {
            // console.log(data.country[index].state);
            if (detail.country == e.target.value) {
                selectstate.innerHTML = "";
                selectstate.append(createOption("Please Select a region,state or province.", ""));
                data.country_state[index].state.forEach((state) => {
                    selectstate.append(createOption(state, state));
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