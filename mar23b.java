import java.util.Scanner;
public class mar23b {
    public static void main(String args[]) {
        Scanner keyboard = new Scanner(System.in);
        String answer = "Yes";
        do {
        System.out.print("Enter a number to check: ");
        long num = keyboard.nextInt();
        long square = (long) Math.pow(num, 2.0);
        long temp = num;
        boolean flag = true;
        while (num > 0) {
            if (num % 10 != square % 10) {
            flag = false;
            break;
            }
            num = num / 10;
            square = square / 10;
            }
            if (flag)
            System.out.println(temp + " is an automorphic number.");
            else
            System.out.println(temp + " is not an automorphic number.");
            System.out.print("Do you want to continue (yes/no)? ");
            answer = keyboard.next();
            } while (!answer.equalsIgnoreCase("no"));
            keyboard.close();
            }
    }
