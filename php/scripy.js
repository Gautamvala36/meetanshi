function() {
    var length = Math.max(arguments.length - startIndex, 0),
        rest = Array(length),
        index = 0;
    for (; index < length; index++) {
        rest[index] = arguments[index + startIndex];
    }
    switch (startIndex) {
        case 0:
            return func.call(this, rest);
        case 1:
            return func.call(this, arguments[0], rest);
        case 2:
            return func.call(this, arguments[0], arguments[1], rest);
    }
    var args = Array(startIndex + 1);
    for (index = 0; index < startIndex; index++) {
        args[index] = arguments[index];
    }
    args[startIndex] = rest;
    return func.apply(this, args);
}

function() {
    elementValueBeforeEvent = null;
    propertyChangedFired = false;
    var modelValue = valueAccessor();
    var elementValue = ko.selectExtensions.readValue(element);
    ko.expressionRewriting.writeValueToProperty(modelValue, allBindings, 'value', elementValue);
  }


//   / -----------hide show form using toggle-----------
// $(document).ready(function () {
//     $(".toggle-switch1").click(function () {
//         var isChecked = $("input[type='checkbox']").is(":checked");
//         $(".toggle-label1").text(isChecked ? "Yes" : "No");
//         if (isChecked) {
//             $(".form_below").hide();
//         } else {
//             $(".form_below").show();
//         }
//     });
// });

// // ----------------reset code------------
// $(document).ready(function () {
//     $(".reset").click(function () {
//         $("input[type='text']").val("");
//         $("input[type='email']").val("");
//         $("input[type='tel']").val("");
//         $("select").val("");
//     });
// });