public class Kata {
  public static String stringy(int size) {
    String result = "";
    for (int i = 0; i < size; i++) {
      result += i % 2 == 0 ? "1" : "0";
    }
    return result;
  }
}
