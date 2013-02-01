/**
 * @fileOverview This is the fake file.
 * @author malcolm
 * @version 1
 * @example
 * blah(10,19)
 */

/**
 * This is a fake funtion
 * @param  {number} foo User value
 * @param  {number} bar User value
 * @return {number}     Returns the result of foo and bar if they are numbers
 * otherwise returns an alert.
 */
function blah(foo,bar){
	/**
	 * Test to make sure we are adding two numbers together
	 * otherwise we could see 'cat' + 'dog'
	 */
	if (isNaN(foo)|| isNaN(bar)) {
		window.alert('you have not entered a number');
	}
	else {
		return fudge(foo,bar);
	}
}

/**
 * Fudge just takes two numbers and adds them together
 * @param  {number} xx value 1
 * @param  {number} yy value 2
 * @return {number}    Adds xx and yy together.
 */
function fudge(xx,yy){
	return(xx + yy);
}