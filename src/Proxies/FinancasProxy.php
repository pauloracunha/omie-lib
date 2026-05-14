<?php

namespace OmieLib\Proxies;

use OmieLib\Common\ModuleProxy;

/**
 * @property \OmieLib\Financas\Contareceberboleto\ContaReceberBoletoJsonClient $contareceberboleto
 * @property \OmieLib\Financas\Contareceber\LancamentoContaReceberJsonClient $contareceber
 * @property \OmieLib\Financas\Contacorrentelancamentos\ContaCorrenteLancamentosJsonClient $contacorrentelancamentos
 * @property \OmieLib\Financas\Contapagar\LancamentoContaPagarJsonClient $contapagar
 * @property \OmieLib\Financas\Pix\PIXJsonClient $pix
 * @property \OmieLib\Financas\Resumo\ResumoFinancasJsonClient $resumo
 * @property \OmieLib\Financas\Pesquisartitulos\PesquisarTitulosJsonClient $pesquisartitulos
 * @property \OmieLib\Financas\Extrato\ExtratoContaCorrenteJsonClient $extrato
 * @property \OmieLib\Financas\Mf\MovimentosFinanceirosJsonClient $mf
 * @property \OmieLib\Financas\Caixa\OrcamentoCaixaJsonClient $caixa
 */
class FinancasProxy extends ModuleProxy {}
