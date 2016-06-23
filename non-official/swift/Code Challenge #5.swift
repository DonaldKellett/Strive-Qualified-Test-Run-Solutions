import XCTest
@testable import testing

// Code
import Foundation
func accum(s: String) -> String {
    var i = 0, arr = Array(s.lowercaseString.characters).map{String($0)}.map{ (s: String) -> String in
        var result = s.uppercaseString
        for _ in 0..<i {
            result += s
        }
        i += 1
        return result
    }
    return arr.joinWithSeparator("-")
}

// Test Cases
class testingCodeChallenge5: XCTestCase {
    func testExamples() {
        XCTAssert(accum("abcd") == "A-Bb-Ccc-Dddd")
        XCTAssert(accum("RqaEzty") == "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy")
        XCTAssert(accum("cwAt") == "C-Ww-Aaa-Tttt")
    }
    func testStringy() {
        XCTAssert(accum("ZpglnRxqenU") == "Z-Pp-Ggg-Llll-Nnnnn-Rrrrrr-Xxxxxxx-Qqqqqqqq-Eeeeeeeee-Nnnnnnnnnn-Uuuuuuuuuuu")
        XCTAssert(accum("NyffsGeyylB") == "N-Yy-Fff-Ffff-Sssss-Gggggg-Eeeeeee-Yyyyyyyy-Yyyyyyyyy-Llllllllll-Bbbbbbbbbbb")
        XCTAssert(accum("MjtkuBovqrU") == "M-Jj-Ttt-Kkkk-Uuuuu-Bbbbbb-Ooooooo-Vvvvvvvv-Qqqqqqqqq-Rrrrrrrrrr-Uuuuuuuuuuu")
        XCTAssert(accum("EvidjUnokmM") == "E-Vv-Iii-Dddd-Jjjjj-Uuuuuu-Nnnnnnn-Oooooooo-Kkkkkkkkk-Mmmmmmmmmm-Mmmmmmmmmmm")
        XCTAssert(accum("HbideVbxncC") == "H-Bb-Iii-Dddd-Eeeee-Vvvvvv-Bbbbbbb-Xxxxxxxx-Nnnnnnnnn-Cccccccccc-Ccccccccccc")
    }
    func testAdvanced() {
        XCTAssert(accum("Codewars") == "C-Oo-Ddd-Eeee-Wwwww-Aaaaaa-Rrrrrrr-Ssssssss")
        XCTAssert(accum("testAdvanced") == "T-Ee-Sss-Tttt-Aaaaa-Dddddd-Vvvvvvv-Aaaaaaaa-Nnnnnnnnn-Cccccccccc-Eeeeeeeeeee-Dddddddddddd")
        XCTAssert(accum("Supercalifragilisticexpialidocious") == "S-Uu-Ppp-Eeee-Rrrrr-Cccccc-Aaaaaaa-Llllllll-Iiiiiiiii-Ffffffffff-Rrrrrrrrrrr-Aaaaaaaaaaaa-Ggggggggggggg-Iiiiiiiiiiiiii-Lllllllllllllll-Iiiiiiiiiiiiiiii-Sssssssssssssssss-Tttttttttttttttttt-Iiiiiiiiiiiiiiiiiii-Cccccccccccccccccccc-Eeeeeeeeeeeeeeeeeeeee-Xxxxxxxxxxxxxxxxxxxxxx-Ppppppppppppppppppppppp-Iiiiiiiiiiiiiiiiiiiiiiii-Aaaaaaaaaaaaaaaaaaaaaaaaa-Llllllllllllllllllllllllll-Iiiiiiiiiiiiiiiiiiiiiiiiiii-Dddddddddddddddddddddddddddd-Ooooooooooooooooooooooooooooo-Cccccccccccccccccccccccccccccc-Iiiiiiiiiiiiiiiiiiiiiiiiiiiiiii-Oooooooooooooooooooooooooooooooo-Uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu-Ssssssssssssssssssssssssssssssssss")
    }
}
