import XCTest
@testable import testing

// Code
import Foundation
func convertFrac(fs: [[Int]]) -> String {
    let cd = fs.map{$0[1]}.reduce(1,combine: lcm), result = fs.map{"(\($0[0] * cd / $0[1]),\(cd))"}.joinWithSeparator("")
    return result
}
func gcd(a: Int, b: Int) -> Int {
    return b == 0 ? a : gcd(b, b: a % b)
}
func lcm(a: Int, b: Int) -> Int {
    return a * b / gcd(a, b: b)
}

// Test Cases
class testingCodeChallenge6: XCTestCase {
    func testExamples() {
        XCTAssert(convertFrac([[1,2],[1,3],[1,4]]) == "(6,12)(4,12)(3,12)")
        XCTAssert(convertFrac([[69,130],[87,1310],[3,4]]) == "(18078,34060)(2262,34060)(25545,34060)")
    }
    func testConvertFrac() {
        XCTAssert(convertFrac([[2,5],[3,8],[5,6],[1,4]]) == "(48,120)(45,120)(100,120)(30,120)")
        XCTAssert(convertFrac([[2, 3], [1, 3], [1, 4], [3, 4], [7, 10], [9, 10], [1, 10]]) == "(40,60)(20,60)(15,60)(45,60)(42,60)(54,60)(6,60)")
        XCTAssert(convertFrac([[1, 2], [2, 3], [1, 4], [4, 5], [5, 7], [5, 6]]) == "(210,420)(280,420)(105,420)(336,420)(300,420)(350,420)")
        XCTAssert(convertFrac([[1, 3], [2, 3], [1, 21], [2, 21], [3, 7], [4, 21], [20, 21], [5, 7]]) == "(7,21)(14,21)(1,21)(2,21)(9,21)(4,21)(20,21)(15,21)")
        XCTAssert(convertFrac([[1, 2], [3, 4], [5, 6], [7, 8], [9, 10], [11, 12], [13, 14], [1, 14], [3, 14]]) == "(420,840)(630,840)(700,840)(735,840)(756,840)(770,840)(780,840)(60,840)(180,840)")
    }
}
