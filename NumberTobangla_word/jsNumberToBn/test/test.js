'use strict';

var expect = require('chai').expect;
var converToBengaliWord = require('../lib');

describe('#Convert Amount to Bengali Word Representation Test', function () {
    it('should convert 1 to bengali এক', function () {
        var result = converToBengaliWord(1);
        expect(result).to.equal('এক');
    });

    it('should convert 10000 to bengali দশ হাজার', function () {
        var result = converToBengaliWord(10000);
        expect(result).to.equal('দশ হাজার');
    });

    it('should convert 1277548.57 to it\'s bengali word represetation', function () {
        var result = converToBengaliWord(1277548.57);
        expect(result).to.equal('বার লক্ষ সাতাত্তর হাজার পাঁচ শত আটচল্লিশ দশমিক পাঁচ সাত');
    });

    it('should convert 7576516080681.50 to it\'s bengali word represetation', function () {
        var result = converToBengaliWord(7576516080681.50);
        expect(result).to.equal('সাত লক্ষ সাতান্ন হাজার ছয় শত একান্ন কোটি ষাট লক্ষ আশি হাজার ছয় শত একাশি দশমিক পাঁচ');
    });

    it('should convert 9999999999999 to it\'s bengali word represetation', function () {
        var result = converToBengaliWord(9999999999999);
        expect(result).to.equal('নয় লক্ষ নিরানব্বই হাজার নয় শত নিরানব্বই কোটি নিরানব্বই লক্ষ নিরানব্বই হাজার নয় শত নিরানব্বই');
    });

    it('should convert 111111111110 to it\'s bengali word represetation', function () {
        var result = converToBengaliWord(111111111110);
        expect(result).to.equal('এগারো হাজার এক শত এগারো কোটি এগারো লক্ষ এগারো হাজার এক শত দশ');
    });
    it('should convert .5 to it\'s bengali word represetation', function () {
        var result = converToBengaliWord(.5);
        expect(result).to.equal(' দশমিক পাঁচ');
    });

    it('should convert 111222333444555 to it\'s bengali word represetation', function () {
        var result = converToBengaliWord(111222333444555);
        expect(result).to.equal('এক কোটি এগারো লক্ষ বাইশ হাজার দুই শত তেত্রিশ কোটি চৌত্রিশ লক্ষ চুয়াল্লিশ হাজার পাঁচ শত পঞ্চান্ন');
    });

    it('should convert 200300400500.25 to it\'s bengali word represetation', function () {
        var result = converToBengaliWord(200300400500.25);
        expect(result).to.equal('বিশ হাজার ত্রিশ কোটি চার লক্ষ পাঁচ শত দশমিক দুই পাঁচ');
    });

    it('should convert 3.1416 to it\'s bengali word represetation', function () {
        var result = converToBengaliWord(3.1416);
        expect(result).to.equal('তিন দশমিক এক চার এক ছয়');
    });

     it('should convert 100000000700.1234 to it\'s bengali word represetation', function () {
        var result = converToBengaliWord(100000000700.1234);
        expect(result).to.equal('দশ হাজার কোটি সাত শত দশমিক এক দুই তিন চার');
    });
});

var toBengaliWord = require('bengali-number');
var result = toBengaliWord(37762086.507);
console.log(result);  //