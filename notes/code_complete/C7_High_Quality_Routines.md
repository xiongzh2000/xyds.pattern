#高质量的子程序

##7.1 创建子程序的正当理由
+ 降低复杂度；
+ 引入中间、易懂的抽象； 通过好的函数名字提供更高层次的抽象，并且降低复杂度；
+ 避免代码重复；
+ 支持子类化： 让可覆盖的子程序保持简单；
+ 隐藏顺序： 把处理事件的顺序通过一个封装的新的子程序隐藏起来
+ 隐藏指针操作 
+ 提高可移植性： 用子程序来隔离不可移植的部分。
+ 简化复杂的布尔判断： 可以隐藏和收敛判断的细节，并且可以通过可描述性的函数名字概括出判断的目的；
+ 改善性能； 收敛之后，一处优化全局受益
+ 确保所有的子程序都很小；
 
 
##7.2 在子程序层上设计

####内聚的种类：
1. 功能的内聚性： 只子程序只完成一项和它名字相符功能，如sin(),GetCustomerName()。 如果还做了其他操作说明不够内聚或者命名有问题。
2. 顺序上的：
3. todo

##7.3 好的子程序名字
子程序命名的原则：

1. 描述子程序所做的所有事情;
2. 避免使用无意义的、模糊或表述不清的动词；
3. 不用通过数组来形成不同的子程序名字；
4. 根据需要确定子程序名字的长度；标注是名字要清晰易懂
5. 给函数命名时要对返回值有所描述；
6. 给过程起名时用动词+宾语的形式；
例： PrintDocument()，但在面向对象语言中，不需要加入对象的名字(宾语) document.print()就好了
7. 准确使用对仗词语：
add/ remove  increment/decrement  open/close  begin/end  insert/delete  show/hide  create/destory  locl/unlock  source/target first/last  min/max start/stop get/put  next/pervious  up/down  get/set  old/new
8. 为常用过操作确立命名规则； 项目内达成统一。

## 7.5 如何使用子程序参数
1. 按照输入-修改-输出的顺序排列参数
2. 如果几个子程序都是用了类似的一些参数，应该让这些参数的顺序保持一致；
3. 使用所有的参数
4. 把状态或出错变量放在最后；
5. 不要把子程序的参数用作工作变量；
6. 在接口中对参数的假定加以说明；
7. 参数限定在大约7个之内；
8. 考虑对参数采用某种表示输入、修改、输出的命名规则。例：i\_ m\_ o_ 当前缀。
9. 为子程序传递用一维持其接口抽象的对象或变量；
10. 使用具名参数；
11. 确保实际参数与形参相匹配；
 




