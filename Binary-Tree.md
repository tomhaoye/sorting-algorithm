# 遍历
- 先序遍历：若二叉树为空，则空操作；否则访问根节点；先序遍历左子树；先序遍历右子树。
```
function p($tree)
{
	if($tree) {
		echo $tree->val;
		p($tree->left);
		p($tree->right);
	}
}
```
- 中序遍历：若二叉树为空，则空操作；否则中序遍历左子树；访问根节点；中序遍历右子树。
```
function p($tree)
{
	if($tree) {
		p($tree->left);
		echo $tree->val;
		p($tree->right);
	}
}
```
- 后序遍历：若二叉树为空，则空操作；否则后序遍历左子树；后序遍历右子树；访问根节点。
```
function p($tree)
{
	if($tree) {
		p($tree->left);
		p($tree->right);
		echo $tree->val;
	}
}
```