(function ($) {
  'use strict';

  /**
   * All of the code for your public-facing JavaScript source
   * should reside in this file.
   *
   * Note: It has been assumed you will write jQuery code here, so the
   * $ function reference has been prepared for usage within the scope
   * of this function.
   *
   * This enables you to define handlers, for when the DOM is ready:
   */

  $(function () {
    const data = [
      {name: 'Junaid Bin jaman', email: 'me@junaidbinjaman.com'},
      {name: 'Junaid Bin jaman 1', email: 'me@junaidbinjaman.com'},
      {name: 'Junaid Bin jaman 2', email: 'me@junaidbinjaman.com'},
    ];
    foobar(data);
    let mobileNumber1 = '+800 1705294083';
	mobileNumber1 = mobileNumber1.replace(/[ ]/g, '');

	console.log(
      validator.isNumeric(mobileNumber1)
    );
  });
})(jQuery);

function foobar(data) {
  for (let i = 0; i < data.length; i++) {
    const element = data[i];

    for (const key in element) {
      console.log(element[key]);
    }
  }
}
