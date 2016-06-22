import XCTest
@testable import testing

// Code
import Foundation
func isSquare(n: Int) -> Bool {
    return sqrt(Double(n)) % 1.0 == 0.0;
}

// Test Cases
class testingCodeChallenge4: XCTestCase {
    func testThatIsSquareReturnsFalseForNegativeIntegers() {
        XCTAssert(isSquare(-100) == false)
        XCTAssert(isSquare(-99) == false)
        XCTAssert(isSquare(-64) == false)
        XCTAssert(isSquare(-63) == false)
        XCTAssert(isSquare(-62) == false)
        XCTAssert(isSquare(-4) == false)
        XCTAssert(isSquare(-1) == false)
    }
    func testThatIsSquareReturnsTrueFor0() {
        XCTAssert(isSquare(0) == true)
    }
    func testThatIsSquareReturnsTrueForSquares() {
        XCTAssert(isSquare(1) == true)
        XCTAssert(isSquare(4) == true)
        XCTAssert(isSquare(9) == true)
        XCTAssert(isSquare(16) == true)
        XCTAssert(isSquare(25) == true)
        XCTAssert(isSquare(36) == true)
        XCTAssert(isSquare(49) == true)
        XCTAssert(isSquare(64) == true)
        XCTAssert(isSquare(81) == true)
        XCTAssert(isSquare(100) == true)
        XCTAssert(isSquare(1024) == true)
    }
    func testThatIsSquareReturnsFalseForNonSquares() {
        XCTAssert(isSquare(2) == false)
        XCTAssert(isSquare(3) == false)
        XCTAssert(isSquare(5) == false)
        XCTAssert(isSquare(6) == false)
        XCTAssert(isSquare(7) == false)
        XCTAssert(isSquare(8) == false)
        XCTAssert(isSquare(15) == false)
        XCTAssert(isSquare(101) == false)
        XCTAssert(isSquare(19928) == false)
        XCTAssert(isSquare(1283172391) == false)
    }
}
