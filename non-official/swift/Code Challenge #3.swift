import XCTest
@testable import testing

// Code
import Foundation
func getMiddle(s: String) -> String {
    return s.characters.count % 2 != 0 ? String(s[s.startIndex.advancedBy(s.characters.count / 2)]) : String(s[s.startIndex.advancedBy(s.characters.count / 2 - 1)]) + String(s[s.startIndex.advancedBy(s.characters.count / 2)])
}

// Test Cases
class testingCodeChallenge3: XCTestCase {
    func testExamples() {
        XCTAssert(getMiddle("test") == "es")
        XCTAssert(getMiddle("testing") == "t")
        XCTAssert(getMiddle("middle") == "dd")
        XCTAssert(getMiddle("A") == "A")
    }
    func testBasics() {
        XCTAssert(getMiddle("getMiddle") == "i")
        XCTAssert(getMiddle("testBasics") == "Ba")
        XCTAssert(getMiddle("The cow jumped over the moon") == "d ")
        XCTAssert(getMiddle("The cow jumped over the moon.") == " ")
    }
    func testAdvanced() {
        XCTAssert(getMiddle("supercalifragilisticexpialidocious") == "st")
        XCTAssert(getMiddle("Supercalifragilisticexpialidocious!") == "t")
        XCTAssert(getMiddle("testAdvanced") == "dv")
    }
}
