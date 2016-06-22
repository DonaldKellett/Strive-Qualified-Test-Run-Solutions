import XCTest
@testable import testing

// Code
var answer = 42, cake = "yummy"

// Test Cases
class testingCodeChallenge1: XCTestCase {
    
    override func setUp() {
        super.setUp()
    }
    
    override func tearDown() {
        super.tearDown()
    }
    
    func testThatAnswerIs42() {
        XCTAssert(answer == 42, "'answer' was not set to 42");
    }
    func testThatCakeIsYummy() {
        XCTAssert(cake == "yummy", "'cake' was not set to 'yummy'");
    }
}
