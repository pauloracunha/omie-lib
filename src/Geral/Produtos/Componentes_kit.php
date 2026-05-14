<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Componetes do KIT.
 *
 * @pw_element integer $codigo_componente Identificação do componente do KIT, deve ser utilizado para Alterar e Excluir o componente.<BR><BR>Não deve ser informado na inclusão.<BR><BR>Esse código não aparece na tela do Omie.<BR><BR>Preenchimento obrigatório na Alteração e Exclusão.
 * @pw_element integer $codigo_produto_componente Código do produto componente.<BR>(Código interno utilizado apenas na API).<BR>Esse código não aparece na tela do Omie.
 * @pw_element decimal $quantidade_componente Quantidade do componente.
 * @pw_element decimal $valor_unitario_componente Valor unitário do componente.
 * @pw_element integer $local_estoque_componente Local estoque do componente.
 * @pw_complex componentes_kit
 */
class Componentes_kit{
	/**
	 * Identificação do componente do KIT, deve ser utilizado para Alterar e Excluir o componente.<BR><BR>Não deve ser informado na inclusão.<BR><BR>Esse código não aparece na tela do Omie.<BR><BR>Preenchimento obrigatório na Alteração e Exclusão.
	 *
	 * @var integer
	 */
	public int $codigo_componente;
	/**
	 * Código do produto componente.<BR>(Código interno utilizado apenas na API).<BR>Esse código não aparece na tela do Omie.
	 *
	 * @var integer
	 */
	public int $codigo_produto_componente;
	/**
	 * Quantidade do componente.
	 *
	 * @var decimal
	 */
	public float $quantidade_componente;
	/**
	 * Valor unitário do componente.
	 *
	 * @var decimal
	 */
	public float $valor_unitario_componente;
	/**
	 * Local estoque do componente.
	 *
	 * @var integer
	 */
	public int $local_estoque_componente;
}
