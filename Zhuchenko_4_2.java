import java.util.Scanner;
public class Zhuchenko_4_2 {
    public static void main(String[] args) {
        Scanner keyboard = new Scanner(System.in);
        int grade;
        int count = 0;
        double sum = 0;
        int[] numberPerLetter = new int[5]; 
        do {
            System.out.println("Enter exam score [int 0-100]:");
            grade = keyboard.nextInt();

            if (grade < 0 || grade > 100) {
                if (grade != -1) System.out.println("Invalid score.");
                continue;
            }
            count++;
            sum += grade;
            int letterIndex = 9 - (grade / 10);
            letterIndex = Math.max(0, Math.min(4, letterIndex));
            numberPerLetter[letterIndex]++;
        } while (grade != -1);
        System.out.println("Total number of grades: " + count);
        System.out.println("Average grade: " + (sum / count));
        System.out.println("Number of A's: " + numberPerLetter[0]);
        System.out.println("Number of B's: " + numberPerLetter[1]);
        System.out.println("Number of C's: " + numberPerLetter[2]);
        System.out.println("Number of D's: " + numberPerLetter[3]);
        System.out.println("Number of F's: " + numberPerLetter[4]);
        keyboard.close();
    }
}