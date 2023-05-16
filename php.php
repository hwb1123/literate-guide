public static void main(String[] args) {
		int sum;
		Scanner scanner=new Scanner(System.in);
		int[]a={8,4,2,1,23,344,12};
		for(int i=0;i<a.length;i++){
			System.out.println("请输入一个数：");
			sum=scanner.nextInt();
			if(sum==a[i]){
				System.out.println("这个数"+sum+"不存在于这个数列中");
				break;
			}else
				System.out.println("这个数"+sum+"存在于这个数列中");
		}
