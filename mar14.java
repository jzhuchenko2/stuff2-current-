import java.util.Scanner;
public class mar14 {
    public static void main(String args[]) {
        int count = 0;
        Scanner keyboard=new Scanner(System.in);
        System.out.println("Enter a sentence: ");

        String str=keyboard.nextLine();
        for (int i = 0; i < str.length(); i++) {
        if (str.charAt(i) == '!' || str.charAt(i) == ',' || str.charAt(i) == ';' || str.charAt(i) == '.'
        || str.charAt(i) == '?' || str.charAt(i) == '-' || str.charAt(i) == '\'' || 
        str.charAt(i) == '\"'|| str.charAt(i) == ':') {
        count++;
        }
        keyboard.close();
        }

        System.out.println("The number of punctuations exists in the string is: " + count);
    }
}