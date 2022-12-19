import java.util.Scanner;
public class midtermQ6 {
    static boolean isAutomorphic(int a)
    {
        int sq = a * a;
        while (a> 0) {
            if (a % 10 != sq % 10)
                return false;
            a /= 10;
            sq /= 10;
        }
        return true;
    }
    public static void main(String[] args)
    {Scanner keyboard = new Scanner(System.in);
        char answer = 'n';
        System.out.print("Enter a number: ");
        int a = keyboard.nextInt();
        System.out.println(isAutomorphic(a) ? "Automorphic" : "Not Automorphic");
        System.out.println("DO YOU WANT TO CONTINUE ? Y OR N");
        answer = keyboard.next().charAt(0);
        if(answer == 'n' || answer == 'N'){
            System.exit(0);
        keyboard.close();
        }
    }
}
