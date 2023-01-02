import java.util.Scanner;
public class Zhuchenko_8_1b {
    public static void main(String[] args) {
        Scanner keyboard=new Scanner(System.in);
        {System.out.println("Enter first two integers for rational numbers: ");
        int num1 = keyboard.nextInt();
        int num2 = keyboard.nextInt();
        Zhuchenko_8_1a rational = new Zhuchenko_8_1a(num1,num2);
        System.out.println(rational+" = "+rational.getValue());}
        {System.out.println("Enter another two integers for rational numbers: ");
        int num3 = keyboard.nextInt();
        int num4 = keyboard.nextInt();
        Zhuchenko_8_1a rational = new Zhuchenko_8_1a(num3,num4);
        System.out.println(rational+" = "+rational.getValue());}
        {System.out.println("Enter another two integers for rational numbers: ");
        int num5 = keyboard.nextInt();
        int num6 = keyboard.nextInt();
        Zhuchenko_8_1a rational = new Zhuchenko_8_1a(num5,num6);
        System.out.println(rational+" = "+rational.getValue());}
        keyboard.close();
    }
}
