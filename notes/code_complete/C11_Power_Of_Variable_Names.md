# C11,变量名的力量

## 11.1， 选择好变量名的注意事项

1. 名字要完全、准确地描述出该变量所代表的事物。
2. **以问题为导向**名字要反应问题（what），不是如何（How）解决问题。
3. 合适的名字长度（9-20个char）；
4. 变量名对作用域的影响； 例如for循环中的变量i 是合适的。
5. 变量命中的计算值限定词；  类似Total、Sum、Average、Record、Pointer等限定词放在名字的最后。例外Num，放在前表示数量，放在后面表示编号，序号，可以避免使用num表示数量，用total，count代替，index表示特定的。
6. 变量名中的成对使用的时候， 注意对仗词；
 
## 11.2 为特定类型的数据命名
  
  1. 为循环下标命名. 
  如果一个变量要在循环外使用， 那么就应该给他取一个比i,j更有意义的名字。例如， score[teamIndex][eventIndex] 比 score[i][j]合理。
  2. 为状态变量命名. 为状态变量取一个比flag更好的名字;
  3. 为临时变量命名. 除了变量的本意是表示临时的，其他不要用temp等临时或者模糊含义的词。
  4. 为bool变量命名；典型的布尔变量名；给bool变量赋予隐含“真/假”含义的名字； （用if比is更加明确，ifFound、ifComplete）; 是用肯定的布尔变量名;
  5. 为枚举类型命名;
  
## 11.3命名规则的力量
  
   
  
 
 