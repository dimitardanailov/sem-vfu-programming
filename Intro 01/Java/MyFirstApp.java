import java.util.HashMap;
import java.util.Map;


public class MyFirstApp {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		System.out.println("This is my first message");
		
		// Anti Patern
		// PHP $a, $b, $c, ....
		int a, b, c = 0;
		
		// Good Patern
		// PHP $i for iterators
		int i = 0;
		
		//String
		String cyrilic = "Кирилица";
		System.out.println(cyrilic);
		
		//Integer
		int myFirstIntegerVariable = 5;
		System.out.println(myFirstIntegerVariable);
		
		System.out.println(myFirstIntegerVariable + cyrilic);
		
		//Double
		double myFirstDoubleVariable = 1.4;
		System.out.println(myFirstDoubleVariable);
		
		//Array
		int array[] = {2, 3, 4, 5, 6};
		System.out.println("Simple Loop : ");
		for ( ; i < array.length; i++) {
			System.out.printf("Key %d, Variable %d %n", i, array[i]);
		}
		
		//Array With Keys
		Map<String, String> myFirstMap = new HashMap<String, String>();
		myFirstMap.put("university", "VFU");
		myFirstMap.put("course", "SEM");
		myFirstMap.put("link", "sem.vfu.bg");
		System.out.println("Hash map : ");
		System.out.printf("University : %s %n", myFirstMap.get("university"));
		System.out.printf("Course : %s %n", myFirstMap.get("course"));
		System.out.printf("Link : %s %n", myFirstMap.get("link"));
		
		Car myFirstCar = new Car("BMW");
		System.out.printf("Car model : %s %n", myFirstCar.getModel());
		myFirstCar.setModel("Lada");
		System.out.printf("Car model : %s %n", myFirstCar.getModel());
	}
	
	public void HelloWorld() {
		System.out.println("Hello World");
	}

}
